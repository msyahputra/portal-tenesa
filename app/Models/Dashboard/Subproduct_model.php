<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Subproduct_model extends Model
{

    protected $table      = 'sub_product';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_subproduct';
    protected $allowedFields = ['name_subproduct'];

    public function getCategory()
    {
        $builder = $this->db->table('kat_katprod');
        return $builder->get();
    }

    public function get_all_subprod()
    {
        //       $query = $this->db->table('books');
        $query = $this->db->query('select * from sub_product LEFT JOIN kat_katprod ON sub_product.id_katprod=kat_katprod.id_katprod');
        //      print_r($query->getResult());
        // $query = $this->db->get();
        return $query->getResult();
    }

    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $id_katprod = 'required[sub_product.id_katprod]';
            $name_subproduct = 'required[sub_product.name_subproduct]';
        } else {
            $id_katprod = 'required';
            $name_subproduct = 'required';
        }

        $rulesValidation = [
            'id_katprod' => [
                'rules' => $id_katprod,
                'errors' => [
                    'required' => 'Sub Categori harus diisi.'
                ]
            ],
            'name_subproduct' => [
                'rules' => $name_subproduct,
                'errors' => [
                    'required' => 'Sub Product harus diisi.'
                ]
            ]
        ];

        return $rulesValidation;
    }

    public function get_by_id($id)
    {
        $sql = 'select * from sub_product where id_subproduct =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function subprod_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function subprod_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_subproduct' => $id));
    }
}
