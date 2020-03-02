<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $returnType = 'array';

    protected $table = 'user';
    
    protected $allowedFields = ['email', 'hash', 'roles', 'attributes'];

    protected $useTimestamps = false;
}