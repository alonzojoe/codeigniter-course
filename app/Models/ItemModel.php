<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'tbl_item';
    protected $primaryKey = 'id';


    protected $allowedFields = ['name', 'description', 'price'];
    protected $returnType     = 'object';
}
