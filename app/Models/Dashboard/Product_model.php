<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Product_model extends Model
{

    protected $table      = 'product';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_product';
    protected $allowedFields = ['title', 'slug', 'id_kategori', 'description', 'file_document', 'file_video'];


    public function getCategory()
    {
        $builder = $this->db->table('kat_katprod');
        return $builder->get();
    }

    public function getSubproduct()
    {
        $builder = $this->db->table('sub_product');
        return $builder->get();
    }

    public function get_all_product()
    {
        $builder = $this->db->table('product p');

        $builder->join('kat_katprod k', 'k.id_katprod=p.id_katprod');
        // $builder->join('sub_product s', 's.id_katprod=p.id_katprod');
        $builder->select('*');
        return $builder->get();
    }


    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $title = 'required[product.title]';
            $id_katprod = 'required[product.id_katprod]';
            $description = 'required[product.description]';
            $file_document = 'max_size[file_document,1048576]|ext_in[file_document,pdf]';
            $file_video = 'max_size[file_video,1048576]ext_in[file_video,video/mp4]';
        } else {
            $title = 'required';
            $id_katprod = 'required';
            $description = 'required';
            $file_document = 'max_size[file_document,1048576]|ext_in[file_document,pdf]';
            $file_video = 'max_size[file_video,1048576]ext_in[file_video,video/mp4]';
        }

        $rulesValidation = [
            'title' => [
                'rules' => $title,
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'id_katprod' => [
                'rules' => $id_katprod,
                'errors' => [
                    'required' => 'Kategoti harus diisi.'
                ]
            ],
            'description' => [
                'rules' => $description,
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'file_document' => [
                'rules' => $file_document,
                'errors' => [
                    // 'uploaded' => 'file document harus di isi',
                    'max_size' => 'Ukuran file document Max 10 MB',
                    'ext_in' => 'Format file document Wajib .PDF',
                ]
            ],
            'file_video' => [
                'rules' => $file_video,
                'errors' => [
                    'max_size' => 'Ukuran file document Max 1 GB',
                    'ext_in' => 'Format file document Wajib .MP4',
                ]
            ]
        ];

        return $rulesValidation;
    }

    public function get_by_id($id)
    {
        $sql = 'select * from product where id_product =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function product_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function product_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_product' => $id));
    }
}
