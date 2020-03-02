<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteField extends Migration
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
			'text' => [
				'type' => 'TEXT',
				'constraint' => 8192,
			],
			'user' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('user', 'user', 'id', 'RESTRICT', 'CASCADE');

		$this->forge->createTable('note');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('note');
	}
}
