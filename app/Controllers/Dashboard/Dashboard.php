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
        $data['get_user_forday'] = $this->model->getAllTotaluserDay();
        $data['get_user_formonth'] = $this->model->getAllTotaluserMonth();

        // dd($data['get_user_formonth']);
        return view('dashboard/dashboard', $data);
    }

    function get_users_online()
    {
        helper(['form', 'url']);
        // $this->model = new Users_model();
        $data = $this->model->user_online();
        echo json_encode($data);
    }

    function get_users_visitor()
    {
        helper(['form', 'url']);
        // $this->model = new Users_model();
        $data = $this->model->visitol_all_user();
        echo json_encode($data);
    }

    function get_total_forday()
    {
        helper(['form', 'url']);
        // $this->model = new Users_model();
        $date = DATE('Y-m-d');
        $data = $this->model->getTotaluserDayli($date);
        echo json_encode($data);
    }

    function get_total_formonth()
    {
        helper(['form', 'url']);
        // $this->model = new Users_model();
        $date = DATE('Y-m-d');
        $date_tahun = DATE('Y');
        $date_bulan = DATE('m');
        $data = $this->model->getTotaluserMonth($date_tahun, $date_bulan);
        echo json_encode($data);
    }
}
