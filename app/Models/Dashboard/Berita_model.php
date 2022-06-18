<?php

namespace App\Models\Dashboard;

use CodeIgniter\Model;

class Berita_model extends Model
{

    protected $table      = 'news';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_news';
    protected $allowedFields = ['title', 'slug', 'tanggal', 'description', 'image', 'file_document'];


    public function get_all_news()
    {
        //       $query = $this->db->table('books');
        $query = $this->db->query('select * from news');
        //      print_r($query->getResult());
        // $query = $this->db->get();
        return $query->getResult();
    }

    public function getRulesValidation($method = null)
    {
        if ($method == 'save') {
            $title = 'required[news.title]';
            $tanggal = 'required[news.tanggal]';
            $description = 'required[news.description]';
            $imgRules = 'max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/png,image/jpeg]';
            $file_document = 'max_size[file_document,2048]|ext_in[file_document,pdf]';
        } else {
            $title = 'required';
            $tanggal = 'required';
            $description = 'required';
            $imgRules = 'max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/png,image/jpeg]';
            $file_document = 'max_size[file_document,2048]|ext_in[file_document,pdf]';
        }

        $rulesValidation = [
            'title' => [
                'rules' => $title,
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
            ],
            'tanggal' => [
                'rules' => $tanggal,
                'errors' => [
                    'required' => 'Tanggal harus diisi.'
                ]
            ],
            'description' => [
                'rules' => $description,
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'image' => [
                'rules' => $imgRules,
                'errors' => [
                    'max_size' => '{field} melebihi ukuran yang ditentukan',
                    'is_image' => 'format {field} tidak sesuai.',
                    'mime_in' => 'yang anda pilih bukan gambar.'
                ]
            ],
            'file_document' => [
                'rules' => $file_document,
                'errors' => [
                    'max_size' => 'Ukuran file document Max 2048 KB',
                    'ext_in' => 'Format file document Wajib .PDF',
                ]
            ]
        ];

        return $rulesValidation;
    }

    public function get_by_id($id)
    {
        $sql = 'select * from news where id_news =' . $id;
        $query =  $this->db->query($sql);

        return $query->getRow();
    }

    public function news_add($data)
    {

        $query = $this->db->table($this->table)->insert($data);

        return $this->db->insertID();
    }

    public function news_update($where, $data)
    {
        $this->db->table($this->table)->update($data, $where);
        //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }

    public function delete_by_id($id)
    {
        $this->db->table($this->table)->delete(array('id_news' => $id));
    }
}
