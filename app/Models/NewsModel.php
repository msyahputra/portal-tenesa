<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'id_news';
    protected $allowedFields = ['title'];
    protected $useTimestamps = true;

    public function getNews($slug = false)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('news');

        if ($slug == false) {
            $builder->orderBy('id_news', 'DESC');
            return $builder->get();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
