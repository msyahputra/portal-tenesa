<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_user';


    public function save_register($data)
    {
        $this->db->table('users')->insert($data);
    }

    public function login($user_parner, $password)
    {
        return $this->db->table('users')
            ->where([
                'user_parner' => $user_parner,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function update_user_detail($id, $data)
    {
        return $this->db->table('users_detail')->where([
            'id' => $id,
            'status' => 'online'
        ])->update($data);
    }

    // public function update_user_detail($data, $where)
    // {
    //     $this->db->table('users_detail')->update($where, $data);
    // }
}
