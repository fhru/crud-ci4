<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    public function get_data_login($email, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('email', $email);
        $log = $builder->get()->getRow();
        return $log;
    }
}
