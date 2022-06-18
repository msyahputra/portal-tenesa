<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Roster_model extends Model
{

    protected $table      = 'roster';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_roster';
    protected $allowedFields = ['name_file', 'slug', 'file_document'];


    public function get_all_roster()
    {
        $builder = $this->db->table('roster');
        return $builder->get();
    }


    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $name_file = 'required[roster.name_file]';
            $file_document = 'uploaded[file_document]|max_size[file_document,2048]|ext_in[file_document,xlsx]';
        } else {
            $name_file = 'required';
            $file_document = 'uploaded[file_document]|max_size[file_document,2048]|ext_in[file_document,xlsx]';
        }

        $rulesValidation = [
            'name_file' => [
                'rules' => $name_file,
                'errors' => [
                    'required' => 'Judul File harus diisi.'
                ]
            ],
            'file_document' => [
                'rules' => $file_document,
                'errors' => [
                    'uploaded' => 'file document harus di isi',
                    'max_size' => 'Ukuran file document Max 2048 KB',
                    'ext_in' => 'Format file document Wajib .Excel',
                ]
            ]
        ];

        return $rulesValidation;
    }

    public function get_by_id($id)
    {
        $sql = 'select * from roster where id_roster =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function roster_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function roster_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_roster' => $id));
    }
}
