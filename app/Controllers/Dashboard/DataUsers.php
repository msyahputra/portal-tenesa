<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Users_model;

class DataUsers extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Users_model();
    }

    public function index()
    {
        if (session()->get('level') <> 1) {
            return redirect()->to(base_url('dashboard'));
        }
        helper(['form', 'url']);
        // $this->model = new Users_model();
        $data['user'] = $this->model->get_all_users();
        return view('dashboard/data_user', $data);
    }

    public function users_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Users_model();

        //File image
        $image = $this->request->getFile('image');

        if ($image->getError() == 4) {
            $imageName = 'default.png';
        } else {
            // generate nama image random
            $imageName = $image->getRandomName();
            $image->move('uploads/image_user/', $imageName);
        }

        $data = array(
            'user_parner' => $this->request->getVar('user_parner'),
            'jabatan' => $this->request->getVar('jabatan'),
            'full_name' => $this->request->getVar('full_name'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'level' => $this->request->getVar('level'),
            'password' => md5($this->request->getVar('password')),
            'image' => $imageName
        );
        $insert = $this->model->users_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Users_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function users_update()
    {
        // $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Users_model();

        //File image
        $image = $this->request->getFile('image');

        // cek gambar, tetap gambar lama
        if ($image->getError() == 4) {
            $nameImage = $this->request->getVar('namaImageLama');
        } else {
            // generate nama file random
            $nameImage = $image->getRandomName();
            // pindah gambar
            $image->move('uploads/image_user/', $nameImage);
            //  hapus file lama 
            unlink('uploads/image_user/' . $this->request->getVar('namaImageLama'));
        }

        $data = array(
            'user_parner' => $this->request->getVar('user_parner'),
            'jabatan' => $this->request->getVar('jabatan'),
            'full_name' => $this->request->getVar('full_name'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'level' => $this->request->getVar('level'),
            'password' => md5($this->request->getVar('password')),
            'image' => $nameImage
        );

        $this->model->users_update(array('id_user' => $this->request->getVar('id_user')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function users_delete($id)
    {

        helper(['form', 'url']);
        // cari gambar yang mau di hapus
        $users = $this->model->get_by_id($id);

        // cek jika gambarnya default.png
        if ($users->image != 'default.png') {
            // hapus gambar
            unlink('uploads/image_user/' . $users->image);
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

            if ($validation->hasError('user_parner')) {
                $data['inputerror'][] = 'user_parner';
                $data['error_string'][] = $validation->getError('user_parner');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('jabatan')) {
                $data['inputerror'][] = 'jabatan';
                $data['error_string'][] = $validation->getError('jabatan');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('full_name')) {
                $data['inputerror'][] = 'full_name';
                $data['error_string'][] = $validation->getError('full_name');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('email')) {
                $data['inputerror'][] = 'email';
                $data['error_string'][] = $validation->getError('email');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('no_hp')) {
                $data['inputerror'][] = 'no_hp';
                $data['error_string'][] = $validation->getError('no_hp');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('password')) {
                $data['inputerror'][] = 'password';
                $data['error_string'][] = $validation->getError('password');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('level')) {
                $data['inputerror'][] = 'level';
                $data['error_string'][] = $validation->getError('level');
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
