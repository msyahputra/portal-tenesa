<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Subproduct_model;

class SubProduct extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new Subproduct_model();
    }

    public function index()
    {

        helper(['form', 'url']);
        $this->model = new Subproduct_model();
        $data['subprod'] = $this->model->get_all_subprod();
        $data['category'] = $this->model->getCategory()->getResult();
        return view('dashboard/subproduct', $data);
    }

    public function subprod_add()
    {
        $this->_validate('save');
        helper(['form', 'url']);
        $this->model = new Subproduct_model();

        $status = $this->request->getVar('id_katprod');

        $data = array(
            'id_katprod' => $this->request->getPost('id_katprod'),
            'status' => $status,
            'name_subproduct' => $this->request->getPost('name_subproduct')
        );
        $insert = $this->model->subprod_add($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {

        $this->model = new Subproduct_model();

        $data = $this->model->get_by_id($id);

        echo json_encode($data);
    }

    public function subprod_update()
    {
        $this->_validate('update');
        helper(['form', 'url']);
        $this->model = new Subproduct_model();

        $status = $this->request->getVar('id_katprod');

        $data = array(
            'id_katprod' => $this->request->getPost('id_katprod'),
            'status' => $status,
            'name_subproduct' => $this->request->getPost('name_subproduct')
        );

        $this->model->subprod_update(array('id_subproduct' => $this->request->getPost('id_subproduct')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function subprod_delete($id)
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

            if ($validation->hasError('id_katprod')) {
                $data['inputerror'][] = 'id_katprod';
                $data['error_string'][] = $validation->getError('id_katprod');
                $data['status'] = FALSE;
            }

            if ($validation->hasError('name_subproduct')) {
                $data['inputerror'][] = 'name_subproduct';
                $data['error_string'][] = $validation->getError('name_subproduct');
                $data['status'] = FALSE;
            }

            if ($data['status'] === FALSE) {
                echo json_encode($data);
                exit();
            }
        }
    }
}
