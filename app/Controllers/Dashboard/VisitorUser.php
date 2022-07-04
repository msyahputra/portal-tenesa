<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Dashboard\Users_model;
use phpDocumentor\Reflection\Types\Null_;

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

        $tahun = date('Y', strtotime($this->request->getVar('bulan')));
        $bulan = date('m', strtotime($this->request->getVar('bulan')));
        $tahun = "";
        $bulan = "";
        $tanggal = $this->request->getVar('tanggal');;
        $this->model = new Users_model();
        $data['get_user_online'] = $this->model->get_visitol_all_user();

        if ($tanggal) {
            $data['get_user_online'] = $this->model->getTanggal($tanggal);
        } elseif ($tahun && $bulan) {
            $data['get_user_online'] = $this->model->getBulan($tahun, $bulan);
        }
        // d($data['get_user_online']);
        return view('dashboard/visitor_user', $data);
    }
}
