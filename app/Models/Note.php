<?php namespace App\Models;

use App\Entities\Note as EntitiesNote;
use CodeIgniter\Model;

class Note extends Model
{
    protected $table = 'note';

    protected $returnType = EntitiesNote::class;

    protected $allowedFields = ['text', 'user'];
}