<?php namespace App\Models;

use CodeIgniter\Model;

class Role extends Model
{
    protected $allowedFields = ['label', 'priority'];

    protected $table = 'roles';

    protected $useTimestamps = false;
    
}