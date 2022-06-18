<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Kategori_model extends Model
{

    protected $table      = 'kat_katprod';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_katprod';
    protected $allowedFields = ['kategori_name'];


    public function get_all_katprod()
    {
        //       $query = $this->db->table('books');
        $query = $this->db->query('select * from kat_katprod');
        //      print_r($query->getResult());
        // $query = $this->db->get();
        return $query->getResult();
    }

    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $kategori_name = 'required[kat_katprod.kategori_name]';
        } else {
            $kategori_name = 'required';
        }

        $rulesValidation = [
            'kategori_name' => [
                'rules' => $kategori_name,
                'errors' => [
                    'required' => 'Sub Categori harus diisi.'
                ]
            ]
        ];

        return $rulesValidation;
    }

    public function get_by_id($id)
    {
        $sql = 'select * from kat_katprod where id_katprod =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function katprod_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function katprod_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_katprod' => $id));
    }
}
