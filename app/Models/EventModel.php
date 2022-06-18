<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table      = 'event';
    protected $primaryKey = 'id_event';
    protected $allowedFields = ['title'];
    protected $useTimestamps = true;

    public function getEvent($slug = false)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('event');

        if ($slug == false) {
            $builder->orderBy('id_event', 'DESC');
            return $builder->get();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
