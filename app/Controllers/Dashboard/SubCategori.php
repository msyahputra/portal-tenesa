<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Kategori_model;

class SubCategori extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Kategori_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Kategori_model();
        $data['katprod'] = $this->model->get_all_katprod();
        return view('dashboard/kategori', $data);
    }

    public function katprod_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Kategori_model();

        $data = array(
            'kategori_name' => $this->request->getPost('kategori_name')
        );
        $insert = $this->model->katprod_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Kategori_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function katprod_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Kategori_model();

        $data = array(
            'kategori_name' => $this->request->getPost('kategori_name')
        );

        $this->model->katprod_update(array('id_katprod' => $this->request->getPost('id_katprod')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function katprod_delete($id)
    {

        helper(['form', 'url']);

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

            if ($validation->hasError('kategori_name')) {
                $data['inputerror'][] = 'kategori_name';
                $data['error_string'][] = $validation->getError('kategori_name');
                $data['status'] = FALSE;
            }

            if ($data['status'] === FALSE) {
                echo json_encode($data);
                exit();
            }
        }
    }
}
