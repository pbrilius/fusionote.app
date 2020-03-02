<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $active = [
            'label' => 'active',
            'superiority' => 10,
        ];

        $suspended = [
            'label' => 'suspended',
            'superiority' => 12,
        ];

        $this->db->query('INSERT INTO `fn_attributes` (`label`, `superiority`) VALUES (:label:, :superiority:)', $active);
        $this->db->query('INSERT INTO `fn_attributes` (`label`, `superiority`) VALUES (:label:, :superiority:)', $suspended);
    }
}