<?php namespace App\Models;

use CodeIgniter\Model;

class Gmap extends Model
{
    protected $table = 'gmaps';

    protected $returnType = 'array';

    protected $allowedFields = [
        'geotags',
        'note',
    ];
}