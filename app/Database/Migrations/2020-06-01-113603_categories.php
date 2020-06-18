<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Database;

class Categories extends Migration
{
	/**
	 * Create table
	 */
	public function up()
	{
		$this->db->disableForeignKeyChecks();

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'parent_id' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'null'           => TRUE,
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'deleted_at datetime',
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('parent_id', 'category', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('category', true);

		$this->db->enableForeignKeyChecks();

		$this->seedData();
	}

	/**
	 * Seed Category Data
	 */
	protected function seedData()
	{
		$seeder = Database::seeder();
		$seeder->call('CategorySeeder');
	}

	/**
	 * Executes when table down
	 */
	public function down()
	{
		$this->forge->dropTable('category');
	}
}
