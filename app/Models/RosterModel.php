<?php

namespace App\Models;

use CodeIgniter\Model;

class RosterModel extends Model
{

    protected $table      = 'roster';
    protected $primaryKey = 'id_roster';
    protected $allowedFields = ['name_file', 'slug', 'file_document'];
    protected $useTimestamps = true;

    public function getRoster($slug = false)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('roster');

        if ($slug == false) {
            $builder->orderBy('id_roster', 'DESC');
            return $builder->get();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
