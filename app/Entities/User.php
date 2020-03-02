<?php namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    protected $attributes = [
        'id' => null,
        'email' => null,
        'hash' => null,
        'roles' => null,
        'attributes' => null,
    ];

    protected $casts = [
        'roles' => 'json',
        'attributes' => 'json',
    ];

    /**
     * Immutable hash
     *
     * @param string $hash
     * @return void
     */
    public function setHash(string $hash)
    {
        $object = new User(get_object_vars($this));
        $object->hash = $hash;

        return $object;
    }
}