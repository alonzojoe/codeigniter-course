<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id';


    protected $allowedFields = ['name', 'email', 'password'];
    protected $returnType     = 'object';
}
