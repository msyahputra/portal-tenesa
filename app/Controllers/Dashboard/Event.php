<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Event_model;

class Event extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Event_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Event_model();
        $data['event'] = $this->model->get_all_event();
        return view('dashboard/event', $data);
    }

    public function event_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Event_model();

        //File image
        $image = $this->request->getFile('image');

        if ($image->getError() == 4) {
            $imageName = 'default.png';
        } else {
            // generate nama image random
            $imageName = $image->getRandomName();
            $image->move('uploads/image_event/', $imageName);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $data = array(
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'tanggal' => $this->request->getPost('tanggal'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName
        );
        $insert = $this->model->event_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Event_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function event_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Event_model();

        //File image
        $image = $this->request->getFile('image');

        // cek gambar, tetap gambar lama
        if ($image->getError() == 4) {
            $nameImage = $this->request->getVar('namaImageLama');
        } else {
            // generate nama file random
            $nameImage = $image->getRandomName();
            // pindah gambar
            $image->move('uploads/image_event/', $nameImage);
            //  hapus file lama 
            unlink('uploads/image_event/' . $this->request->getVar('namaImageLama'));
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $data = array(
            'title' => $this->request->getPost('title'),
            'slug' => $slug,
            'tanggal' => $this->request->getPost('tanggal'),
            'description' => $this->request->getPost('description'),
            'image' => $nameImage
        );

        $this->model->event_update(array('id_event' => $this->request->getPost('id_event')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function event_delete($id)
    {

        helper(['form', 'url']);
        // cari gambar yang mau di hapus
        $event = $this->model->get_by_id($id);

        // cek jika gambarnya default.png
        if ($event->image != 'default.png') {
            // hapus gambar
            unlink('uploads/image_event/' . $event->image);
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

            if ($data['status'] === FALSE) {
                echo json_encode($data);
                exit();
            }
        }
    }
}
