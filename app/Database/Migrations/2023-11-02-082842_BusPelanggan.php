<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BusPelanggan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'BusPelanggan_id' => [
				'type' => 'INT',
				'constraint' => 20,
				'auto_increment' => true,
			],
			'BusPelanggan_Nama' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'BusPelanggan_Alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'BusPelanggan_Tgl' => [
				'type' => 'DATE',
			],
		]);
		
		$this->forge->addKey('BusPelanggan_id', true);
		$this->forge->createTable('Bus_Pelanggan');
		
	}

	public function down()
	{
		$this->forge->dropTable('Bus_Pelanggan');
	}
}
