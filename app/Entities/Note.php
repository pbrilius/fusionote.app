<?php namespace App\Entities;

use CodeIgniter\Entity;

class Note extends Entity
{
    protected $attributes = [
        'id' => null,
        'text' => null,
        'user' => null,
    ];

    /**
     * Immutable content setter
     *
     * @param string $text
     * @return Note
     */
    public function setText(string $text)
    {
        $object = new Note(get_object_vars($this));
        $object->text = $text;

        return $object;
    }
}