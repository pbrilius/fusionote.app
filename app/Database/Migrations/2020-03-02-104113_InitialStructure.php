<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InitialStructure extends Migration
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
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 256,
			],
			'hash' => [
				'type' => 'VARCHAR',
				'constraint' => 512,
			],
			'roles' => [
				'type' => 'TEXT',
				'null' => true,
				'contraint' => '4096',
			],
			'attributes' => [
				'type' => 'TEXT',
				'null' => true,
				'contraint' => '4096',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('user');

		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'label' => [
				'type' => 'CHAR',
				'contraint' => 128,
			],
			'priority' => [
				'type' => 'SMALLINT',
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('roles');

		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'label' => [
				'type' => 'VARCHAR',
				'constraint' => 256,
			],
			'superiority' => [
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => true,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('attributes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
		$this->forge->dropTable('roles');
		$this->forge->dropTable('attributes');
	}
}
