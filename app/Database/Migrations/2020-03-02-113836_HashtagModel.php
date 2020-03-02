<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HashtagModel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'label' => [
				'type' => 'VARCHAR',
				'constraint' => 512,
				'null' => false,
			],
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('hashtags');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('hashtags');
	}
}
