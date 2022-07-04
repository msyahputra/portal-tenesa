<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    protected $model;
    public function __construct()
    {
        helper('form');
        $this->model = new AuthModel();
    }

    public function register()
    {
        // dd($kategori);
        $data = [
            'title' => 'Register | TENESA',
        ];

        return view('auth/register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'user_parner' => [
                'label'  => 'User Parner',
                'rules'  => 'required|is_unique[users.user_parner]',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                    'is_unique' => '{field} Sudah Terdaftar'
                ],
            ],
            'full_name' => [
                'label'  => 'Full Name',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'jabatan' => [
                'label'  => 'Position',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'no_hp' => [
                'label'  => 'Number Hp',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                    'min_length' => '{field} Harus Lebih dari 8 karakter!!!'
                ],
            ],
            'repassword' => [
                'label'  => 'Retype Password',
                'rules'  => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Harus Lebih dari 8 karakter!!!',
                    'matches'  => '{field} Tidak sama!!!'
                ],
            ],
        ])) {
            // jika valid

            $data = array(
                'user_parner' => $this->request->getVar('user_parner'),
                'full_name' => $this->request->getVar('full_name'),
                'jabatan' => $this->request->getVar('jabatan'),
                'email' => $this->request->getVar('email'),
                'no_hp' => $this->request->getVar('no_hp'),
                'password' => md5($this->request->getVar('password')),
                'level' => 2
            );

            $this->model->save_register($data);
            session()->setFlashdata('pesan', 'Register Berhasil !!!');
            return redirect()->to(base_url('Auth/register'));
        } else {
            // jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }

    public function login()
    {
        // dd($kategori);
        $data = [
            'title' => 'Login | TENESA',
        ];

        return view('auth/login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'user_parner' => [
                'label'  => 'User Parner',
                'rules'  => 'required[users.user_parner]',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                    'min_length' => '{field} Harus Lebih dari 8 karakter!!!'
                ],
            ]
        ])) {
            // jika valid
            $user_parner = $this->request->getPost('user_parner');
            $password = md5($this->request->getPost('password'));
            $cek = $this->model->login($user_parner, $password);

            if ($cek && $cek['level'] == 2) {
                // jika data di temukan

                $myTime = Time::now('Asia/Jakarta', 'WIB');
                $db = db_connect('default');
                $builder = $db->table('users_detail');

                $new_time = date("Y-m-d H:i:s", strtotime('+8 hours'));

                $data = [
                    'id_user' => $cek['id_user'],
                    'status'    => 'online',
                    'user_active' => $myTime,
                    'user_notactive' => $new_time
                ];

                $builder->insert($data);
                // $db->insertID();

                session()->set('id', $db->insertID());
                session()->set('log', true);
                session()->set('full_name', $cek['full_name']);
                session()->set('email', $cek['email']);
                session()->set('user_parner', $cek['user_parner']);
                session()->set('no_hp', $cek['no_hp']);
                session()->set('level', $cek['level']);
                session()->set('image', $cek['image']);

                return redirect()->to(base_url('/'));
            } else if ($cek && $cek['level'] == 1) {

                $myTime = Time::now('Asia/Jakarta', 'WIB');
                $db = db_connect('default');
                $builder = $db->table('users_detail');

                $new_time = date("Y-m-d H:i:s", strtotime('+8 hours'));

                $data = [
                    'id_user' => $cek['id_user'],
                    'status'    => 'online',
                    'user_active' => $myTime,
                    'user_notactive' => $new_time
                ];

                $builder->insert($data);
                // $db->insertID();

                session()->set('id', $db->insertID());
                session()->set('log', true);
                session()->set('full_name', $cek['full_name']);
                session()->set('email', $cek['email']);
                session()->set('user_parner', $cek['user_parner']);
                session()->set('no_hp', $cek['no_hp']);
                session()->set('level', $cek['level']);
                session()->set('image', $cek['image']);

                // dd($cek);
                return redirect()->to(base_url('/dashboard/dashboard'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal !!, ID Parner Atau Password Tidak Cocok !!!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            // jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/login'));
        }
    }

    public function logout()
    {
        $myTime = Time::now('Asia/Jakarta', 'WIB');
        $id_user = session()->get('id');
        $data_login = array('status' => 'tidak_online', 'user_notactive' => $myTime);
        $this->model->update_user_detail($id_user, $data_login);
        session()->remove('log');
        session()->remove('full_name');
        session()->remove('user_parner');
        session()->remove('email');
        session()->remove('no_hp');
        session()->remove('level');
        session()->remove('image');

        session()->setFlashdata('pesan', 'Logout Sukses...!');
        return redirect()->to(base_url('auth/login'));
    }
}
