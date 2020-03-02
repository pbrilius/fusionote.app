<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ACLSeeder extends Seeder
{
    /**
     * Run
     *
     * @return void
     */
    public function run()
    {
        $this->call('AttributeSeeder');
        $this->call('RoleSeeder');
    }
}