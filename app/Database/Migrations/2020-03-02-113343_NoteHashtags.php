<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteHashtags extends Migration
{
	public function up()
	{
		$this->forge->addColumn('note', [
			'hashtags' => [
				'type' => 'TEXT',
				'constraint' => '4096',
				'after' => 'text',
			],
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('note', 'hashtags');
	}
}
