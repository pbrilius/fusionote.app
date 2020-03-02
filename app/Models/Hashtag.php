<?php namespace App\Models;

use CodeIgniter\Model;

class Hashtag extends Model
{
    protected $returnType = 'array';

    protected $table = 'hashtags';

    protected $allowedFields = [
        'label',
    ];
}