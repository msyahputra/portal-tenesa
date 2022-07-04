<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Users_model extends Model
{

    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['user_parner', 'full_name', 'email', 'no_hp', 'password', 'image'];


    public function get_all_users()
    {
        //       $query = $this->db->table('books');
        $query = $this->db->query('select * from users');
        //      print_r($query->getResult());
        // $query = $this->db->get();
        return $query->getResult();
    }

    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $user_parner = 'required|is_unique[users.user_parner]';
            $full_name = 'required[users.full_name]';
            $jabatan = 'required[users.jabatan]';
            $email = 'required[users.email]';
            $no_hp = 'required[users.no_hp]';
            $password = 'required|matches[users.password]';
            $level = 'required[users.level]';
            $imgRules = 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/png,image/jpeg]';
        } else {
            $user_parner = 'required|is_unique';
            $full_name = 'required';
            $email = 'required';
            $no_hp = 'required';
            $password = 'required|matches';
            $imgRules = 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/png,image/jpeg]';
        }

        $rulesValidation = [
            'user_parner' => [
                'rules' => $user_parner,
                'errors' => [
                    'required' => 'Id Perner Wajib di isi dan tidak boleh kosong!!!',
                    'is_unique' => 'Id Perner Sudah Terdaftar'
                ]
            ],
            'full_name' => [
                'rules' => $full_name,
                'errors' => [
                    'required' => 'Nama Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'jabatan' => [
                'rules' => $jabatan,
                'errors' => [
                    'required' => 'Position Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'email' => [
                'rules' => $email,
                'errors' => [
                    'required' => 'Email Wajib di isi dan tidak boleh kosong!!!',
                    'valid_email' => 'Email Sudah Terdaftar !!!'
                ],
            ],
            'no_hp' => [
                'rules' => $no_hp,
                'errors' => [
                    'required' => 'No Handphone Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'level' => [
                'rules' => $level,
                'errors' => [
                    'required' => 'Akses Login Wajib di isi dan tidak boleh kosong!!!',
                ],
            ],
            'password' => [
                'rules' => $password,
                'rules'  => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password Wajib di isi dan tidak boleh kosong!!!',
                    'min_length' => 'Password Harus Lebih dari 8 karakter!!!'
                ],
            ],
            'image' => [
                'rules' => $imgRules,
                'errors' => [
                    'max_size' => 'Gambar melebihi ukuran yang ditentukan',
                    'is_image' => 'format Gambar tidak sesuai.',
                    'mime_in' => 'yang anda pilih bukan gambar.'
                ]
            ]
        ];

        return $rulesValidation;
    }

    public function get_by_id($id)
    {
        $sql = 'select * from users where id_user =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function users_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function users_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_user' => $id));
    }

    // dasboard get all user online
    public function user_online()
    {
        return $this->db->table('users_detail')
            ->select('COUNT(DISTINCT id_user, status) as total')
            ->where('status="online"')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function visitol_all_user()
    {
        return $this->db->table('users u')
            ->join('users_detail d', 'd.id_user=u.id_user')
            ->select('COUNT(DISTINCT u.full_name, DATE(d.user_active)) as total')
            ->where('u.id_user=d.id_user')
            ->get()->getResultArray();
        return $this->findAll();
    }

    // dasboard get all user online
    public function get_user_online()
    {
        return $this->db->table('users u')
            ->join('users_detail d', 'd.id_user=u.id_user')
            ->select('DISTINCT(u.full_name) full_name, u.user_parner, u.jabatan, d.status, DATE(d.user_active) user_active, d.user_notactive')
            ->where('u.id_user=d.id_user and d.status="online"')
            ->groupBy('DATE(d.user_active), u.full_name')
            ->get()->getResult();
        return $this->findAll();
    }

    public function get_visitol_all_user()
    {
        return $this->db->table('users u')
            ->join('users_detail d', 'd.id_user=u.id_user')
            ->select('DISTINCT(u.full_name) full_name, u.user_parner, u.jabatan, d.status, DATE(d.user_active) user_active, d.user_notactive')
            ->where('u.id_user=d.id_user')
            // ->groupBy('DATE(d.user_active), u.full_name')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getTanggal($where)
    {
        return $this->db->table('users u')
            ->join('users_detail d', 'd.id_user=u.id_user')
            ->select('DISTINCT(u.full_name) full_name, u.user_parner, u.jabatan, d.status, d.user_active, d.user_notactive')
            ->where('u.id_user=d.id_user and d.user_active=', $where)
            // ->like('distinct d.user_active')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getBulan($year, $month)
    {
        return $this->db->table('users u')
            ->join('users_detail d', 'd.id_user=u.id_user')
            ->select('DISTINCT(u.full_name) full_name, u.user_parner, u.jabatan, d.status, DATE(d.user_active) user_active, d.user_notactive')
            ->where('u.id_user=d.id_user and YEAR(d.user_active)=', $year)
            ->where('MONTH(d.user_active)=', $month)
            ->groupBy('DATE(d.user_active), u.full_name')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getTahun($where)
    {
        return $this->db->table('users u')
            ->join('users_detail d', 'd.id_user=u.id_user')
            ->select('u.full_name, u.user_parner, u.jabatan, d.status, d.user_active, d.user_notactive')
            ->where('u.id_user=d.id_user and d.user_active=', $where)
            ->groupBy('u.full_name')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getTotaluserDayli($where)
    {
        return $this->db->table('users_detail')
            ->select('user_active, year(user_active) as tahun,month(user_active) as bulan, day(user_active) as day,count(*) as total_login')
            ->where('user_active=', $where)
            ->groupBy('user_active, year(user_active), month(user_active), day(user_active)')
            ->orderBy('user_active, year(user_active), month(user_active), day(user_active)')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getTotaluserMonth($tahun, $bulan)
    {
        return $this->db->table('users_detail')
            ->select('year(user_active) as tahun,month(user_active) as bulan,count(*) as total_login_month')
            ->where('year(user_active)=', $tahun)
            ->where('month(user_active)=', $bulan)
            ->groupBy('year(user_active),month(user_active)')
            ->orderBy('user_active, year(user_active), month(user_active), day(user_active)')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getAllTotaluserDay()
    {
        return $this->db->table('users_detail')
            ->select('user_active,year(user_active) as tahun,month(user_active) as bulan, day(user_active) as day,count(*) as total_login')
            ->groupBy('user_active,year(user_active),month(user_active),day(user_active)')
            ->orderBy('user_active,year(user_active),month(user_active), day(user_active)')
            ->get()->getResultArray();
        return $this->findAll();
    }

    public function getAllTotaluserMonth()
    {
        return $this->db->table('users_detail')
            ->select('year(user_active) as tahun,month(user_active) as bulan,count(*) as total_login_month')
            ->groupBy('year(user_active),month(user_active)')
            ->orderBy('year(user_active),month(user_active)')
            ->get()->getResultArray();
        return $this->findAll();
    }
}
