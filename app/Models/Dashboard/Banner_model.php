<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Banner_model extends Model
{

    protected $table      = 'banner';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_banner';
    protected $allowedFields = ['title', 'image'];


    public function get_all_banner()
    {
        //       $query = $this->db->table('books');
        $query = $this->db->query('select * from banner');
        //      print_r($query->getResult());
        // $query = $this->db->get();
        return $query->getResult();
    }

    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $title = 'required[banner.title]';
            $imgRules = 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/png,image/jpeg]';
        } else {
            $title = 'required';
            $imgRules = 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/png,image/jpeg]';
        }

        $rulesValidation = [
            'title' => [
                'rules' => $title,
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
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
        $sql = 'select * from banner where id_banner =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function banner_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function banner_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_banner' => $id));
    }
}
