<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $guest = [
            'label' => 'guest',
            'priority' => 1,
        ];

        $user = [
            'label' => 'user',
            'priority' => 3,
        ];

        $admin = [
            'label' => 'admin',
            'priority' => 5,
        ];

        $developer = [
            'label' => 'developer',
            'priority' => 6,
        ];

        $this->db->query('INSERT INTO `fn_roles` (`label`, `priority`) VALUES (:label:, :priority:)', $guest);
        $this->db->query('INSERT INTO `fn_roles` (`label`, `priority`) VALUES (:label:, :priority:)', $user);
        $this->db->query('INSERT INTO `fn_roles` (`label`, `priority`) VALUES (:label:, :priority:)', $admin);
        $this->db->query('INSERT INTO `fn_roles` (`label`, `priority`) VALUES (:label:, :priority:)', $developer);
    }
}