<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Users_model;

class UserOnline extends BaseController
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
        $data['get_user_online'] = $this->model->get_user_online();
        // dd($data['get_user_online']);
        return view('dashboard/user_online', $data);
    }
}
