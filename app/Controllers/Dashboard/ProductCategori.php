<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Product_model;

class ProductCategori extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Product_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Product_model();
        $data['product'] = $this->model->get_all_product()->getResult();
        $data['category'] = $this->model->getCategory()->getResult();
        $data['subprod'] = $this->model->getSubproduct()->getResult();
        // $product = $this->model->get_all_product()->getResult();
        // dd($product);
        return view('dashboard/product', $data);
    }

    public function product_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Product_model();

        //File pdf
        $pdf = $this->request->getFile('file_document');
        if ($pdf->getError() == 4) {
            $pdfName = "";
        } else {
            // generate nama pdf random
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/file/pdf/', $pdfName);
        }

        // File Video
        $vdio = $this->request->getFile('file_video');
        if ($vdio->getError() == 4) {
            $videoName = "";
        } else {
            // generate nama pdf random
            $videoName = $vdio->getRandomName();
            $vdio->move('uploads/file/video/', $videoName);
        }

        $slug = url_title($this->request->getPost('title'), '-', true);
        $data = array(
            'title' => $this->request->getPost('title'),
            'id_katprod' => $this->request->getPost('id_katprod'),
            'id_subproduct' => $this->request->getPost('id_subproduct'),
            'slug' => $slug,
            'description' => $this->request->getPost('description'),
            'file_document' => $pdfName,
            // 'file_video' => $videoName
        );
        $insert = $this->model->product_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Product_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function product_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Product_model();

        //File Pdf
        $pdf = $this->request->getFile('file_document');

        // cek gambar, tetap gambar lama
        if ($pdf->getError() == 4) {
            $pdfName = $this->request->getVar('namaPdfLama');
        } else {
            // generate nama file random
            $pdfName = $pdf->getRandomName();
            // pindah gambar
            $pdf->move('uploads/file/pdf/', $pdfName);
            //  hapus file lama 
            unlink('uploads/file/pdf/' . $this->request->getVar('namaPdfLama'));
        }

        //File Video
        $vdio = $this->request->getFile('file_video');

        // cek gambar, tetap gambar lama
        if ($vdio->getError() == 4) {
            $videoName = $this->request->getVar('namaVdoLama');
        } else {
            // generate nama file random
            $videoName = $vdio->getRandomName();
            // pindah gambar
            $vdio->move('uploads/file/video/', $videoName);
            //  hapus file lama 
            unlink('uploads/file/video/' . $this->request->getVar('namaVdoLama'));
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $data = array(
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'id_katprod' => $this->request->getPost('id_katprod'),
            'id_subproduct' => $this->request->getPost('id_subproduct'),
            'description' => $this->request->getPost('description'),
            'file_document' => $pdfName,
            'file_video' => $videoName
        );

        $this->model->product_update(array('id_product' => $this->request->getPost('id_product')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function product_delete($id)
    {
        helper(['form', 'url']);
        // cari gambar yang mau di hapus
        $product = $this->model->get_by_id($id);

        if ($this->model->get_by_id($id) == $product->file_document) {
            unlink('uploads/file/pdf/' . $product->file_document);
        } else {
            log_message('error', 'lewati.');
        }

        if ($this->model->get_by_id($id) == $product->file_video) {
            unlink('uploads/file/video/' . $product->file_video);
        } else {
            log_message('error', 'lewati.');
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

            if ($validation->hasError('id_katprod')) {
                $data['inputerror'][] = 'id_katprod';
                $data['error_string'][] = $validation->getError('id_katprod');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('description')) {
                $data['inputerror'][] = 'description';
                $data['error_string'][] = $validation->getError('description');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('file_document')) {
                $data['inputerror'][] = 'file_document';
                $data['error_string'][] = $validation->getError('file_document');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('file_video')) {
                $data['inputerror'][] = 'file_video';
                $data['error_string'][] = $validation->getError('file_video');
                $data['status'] = FALSE;
            }

            if ($data['status'] === FALSE) {
                echo json_encode($data);
                exit();
            }
        }
    }
}
