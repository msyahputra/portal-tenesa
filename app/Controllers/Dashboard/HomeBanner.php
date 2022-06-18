<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Banner_model;

class HomeBanner extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Banner_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Banner_model();
        $data['banner'] = $this->model->get_all_banner();
        return view('dashboard/home_banner', $data);
    }

    public function banner_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Banner_model();

        //File image
        $image = $this->request->getFile('image');

        if ($image->getError() == 4) {
            $imageName = 'default.png';
        } else {
            // generate nama image random
            $imageName = $image->getRandomName();
            $image->move('uploads/image_banner/', $imageName);
        }

        $data = array(
            'title' => $this->request->getPost('title'),
            'image' => $imageName
        );
        $insert = $this->model->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Banner_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function banner_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Banner_model();

        //File image
        $image = $this->request->getFile('image');

        // cek gambar, tetap gambar lama
        if ($image->getError() == 4) {
            $nameImage = $this->request->getVar('namaImageLama');
        } else {
            // generate nama file random
            $nameImage = $image->getRandomName();
            // pindah gambar
            $image->move('uploads/image_banner/', $nameImage);
            //  hapus file lama 
            unlink('uploads/image_banner/' . $this->request->getVar('namaImageLama'));
        }

        $data = array(
            'title' => $this->request->getPost('title'),
            'image' => $nameImage
        );

        $this->model->banner_update(array('id_banner' => $this->request->getPost('id_banner')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function banner_delete($id)
    {

        helper(['form', 'url']);
        // cari gambar yang mau di hapus
        $banner = $this->model->get_by_id($id);

        // cek jika gambarnya default.png
        if ($banner->image != 'default.png') {
            // hapus gambar
            unlink('uploads/image_banner/' . $banner->image);
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
