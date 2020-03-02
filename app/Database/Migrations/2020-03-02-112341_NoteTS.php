<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteTS extends Migration
{
	public function up()
	{
		$this->forge->addColumn('note', [
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
			'deleted_at' => [
				'type' => 'DATETIME',
			],
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('note', 'created_at');
		$this->forge->dropColumn('note', 'updated_at');
		$this->forge->dropColumn('note', 'deleted_at');
	}
}
