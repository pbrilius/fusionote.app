<?php namespace App\Models;

use CodeIgniter\Model;

class Attribute extends Model
{
    protected $allowedFields = ['label', 'superiority'];

    protected $table = 'attributes';
}