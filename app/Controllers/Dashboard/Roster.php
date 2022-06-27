<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Roster_model;

class Roster extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Roster_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Roster_model();
        $data['roster'] = $this->model->get_all_roster()->getResult();
        return view('dashboard/roster', $data);
    }

    public function roster_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Roster_model();

        //File image
        $pdf = $this->request->getFile('file_document');

        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/file/excel/', $pdfName);

        $slug = url_title($this->request->getPost('name_file'), '-', true);
        $file_drive = $this->request->getVar('file_drive');
        $data = array(
            'name_file' => $this->request->getPost('name_file'),
            'slug' => $slug,
            'file_document' => $pdfName,
            'file_drive' => $file_drive
        );
        $insert = $this->model->roster_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Roster_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function roster_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Roster_model();

        //File image
        $pdf = $this->request->getFile('file_document');

        // cek gambar, tetap gambar lama
        if ($pdf->getError() == 4) {
            $pdfName = $this->request->getVar('namaExelLama');
        } else {
            // generate nama file random
            $pdfName = $pdf->getRandomName();
            // pindah gambar
            $pdf->move('uploads/file/excel/', $pdfName);
            //  hapus file lama 
            unlink('uploads/file/excel/' . $this->request->getVar('namaExelLama'));
        }

        $slug = url_title($this->request->getVar('name_file'), '-', true);
        $file_drive = $this->request->getVar('file_drive');
        $data = array(
            'name_file' => $this->request->getPost('name_file'),
            'slug' => $slug,
            'file_document' => $pdfName,
            'file_drive' => $file_drive
        );

        $this->model->roster_update(array('id_roster' => $this->request->getPost('id_roster')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function roster_delete($id)
    {
        helper(['form', 'url']);
        // cari gambar yang mau di hapus
        $roster = $this->model->get_by_id($id);

        unlink('uploads/file/excel/' . $roster->file_document);

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

            if ($validation->hasError('name_file')) {
                $data['inputerror'][] = 'name_file';
                $data['error_string'][] = $validation->getError('name_file');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('file_document')) {
                $data['inputerror'][] = 'file_document';
                $data['error_string'][] = $validation->getError('file_document');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('file_drive')) {
                $data['inputerror'][] = 'file_drive';
                $data['error_string'][] = $validation->getError('file_drive');
                $data['status'] = FALSE;
            }

            if ($data['status'] === FALSE) {
                echo json_encode($data);
                exit();
            }
        }
    }
}
