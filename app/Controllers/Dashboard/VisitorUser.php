<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Users_model;

class VisitorUser extends BaseController
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
        $data['get_user_online'] = $this->model->get_visitol_all_user();
        // dd($data['get_user_online']);
        return view('dashboard/visitor_user', $data);
    }
}
