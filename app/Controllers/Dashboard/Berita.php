<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Berita_model;

class Berita extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Berita_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Berita_model();
        $data['news'] = $this->model->get_all_news();
        return view('dashboard/berita', $data);
    }

    public function news_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Berita_model();

        //File image
        $image = $this->request->getFile('image');

        if ($image->getError() == 4) {
            $imageName = 'default.png';
        } else {
            // generate nama image random
            $imageName = $image->getRandomName();
            $image->move('uploads/image_berita/', $imageName);
        }

        //File Pdf
        $pdf = $this->request->getFile('file_document');

        if ($pdf->getError() == 4) {
            $pdfName = null;
        } else {
            // generate nama pdf random
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/file/pdf_berita/', $pdfName);
        }

        // data session parner
        $id_parner = session()->get('user_parner');

        $slug = url_title($this->request->getVar('title'), '-', true);
        $data = array(
            'id_parner' => $id_parner,
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'tanggal' => $this->request->getPost('tanggal'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName,
            // 'file_document' => $pdfName
        );
        $insert = $this->model->insert($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Berita_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function news_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Berita_model();

        //File image
        $image = $this->request->getFile('image');

        // cek gambar, tetap gambar lama
        if ($image->getError() == 4) {
            $nameImage = $this->request->getVar('namaImageLama');
        } else {
            // generate nama file random
            $nameImage = $image->getRandomName();
            // pindah gambar
            $image->move('uploads/image_berita/', $nameImage);
            //  hapus file lama 
            unlink('uploads/image_berita/' . $this->request->getVar('namaImageLama'));
        }

        //File Pdf
        $pdf = $this->request->getFile('file_document');

        // cek pdf, tetap pdf lama
        if ($pdf->getError() == 4) {
            $pdfName = $this->request->getVar('namaPdfLama');
        } else {
            // generate nama file random
            $pdfName = $pdf->getRandomName();
            // pindah pdf
            $pdf->move('uploads/file/pdf_berita/', $pdfName);
            //  hapus file lama 
            unlink('uploads/file/pdf_berita/' . $this->request->getVar('namaPdfLama'));
        }

        $id_parner = session()->get('user_parner');
        $slug = url_title($this->request->getVar('title'), '-', true);
        $data = array(
            'id_parner' => $id_parner,
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'tanggal' => $this->request->getPost('tanggal'),
            'description' => $this->request->getPost('description'),
            'image' => $nameImage,
            'file_document' => $pdfName
        );

        $this->model->news_update(array('id_news' => $this->request->getPost('id_news')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function news_delete($id)
    {

        helper(['form', 'url']);
        // cari gambar yang mau di hapus
        $news = $this->model->get_by_id($id);

        // unlink('uploads/file/pdf_berita/' . $news->file_document);

        // cek jika gambarnya default.png
        if ($news->image != 'default.png') {
            // hapus gambar
            unlink('uploads/image_berita/' . $news->image);
        }

        $this->model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function _validate($method)
    {
        if (!$this->validate($this->model->getRulesValidation($method))) {
            $validation = \Config\Services::validation();

            $data = [];
            $data['error_string'] = [];
            $data['inputerror'] = [];
            $data['status'] = TRUE;

            if ($validation->hasError('title')) {
                $data['inputerror'][] = 'title';
                $data['error_string'][] = $validation->getError('title');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('tanggal')) {
                $data['inputerror'][] = 'tanggal';
                $data['error_string'][] = $validation->getError('tanggal');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('description')) {
                $data['inputerror'][] = 'description';
                $data['error_string'][] = $validation->getError('description');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('image')) {
                $data['inputerror'][] = 'image';
                $data['error_string'][] = $validation->getError('image');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('file_document')) {
                $data['inputerror'][] = 'file_document';
                $data['error_string'][] = $validation->getError('file_document');
                $data['status'] = FALSE;
            }

            if ($data['status'] === FALSE) {
                echo json_encode($data);
                exit();
            }
        }
    }
}
