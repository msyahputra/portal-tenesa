<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Users_model;

class Dashboard extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Users_model();
    }
    public function index()
    {
        //cek role dari session
        if (session()->get('level') != 1) {
            return redirect()->to('/home');
        }
        $data['user_online'] = $this->model->user_online();
        $data['visitor_all'] = $this->model->visitol_all_user();
        // dd($data['user_online']);
        return view('dashboard/dashboard', $data);
    }
}
