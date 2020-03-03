<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $returnType = 'array';

    protected $table = 'user';
    
    protected $allowedFields = ['email', 'hash', 'roles', 'attributes'];

    protected $useTimestamps = false;

    /**
     * Password hash callback
     *
     * @return void
     */
    public function hashPassword()
    {
        if (!isset($data['data']['hash'])) {
            return $data;
        }

        $data['data']['hash'] = password_hash($data['data']['hash'], PASSWORD_DEFAULT);

        return $data;
    }

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];
}
