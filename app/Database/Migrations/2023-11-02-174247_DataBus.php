<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataBus extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nopol' => ['type' => 'VARCHAR', 'constraint' => 15],
			'nama_bus' => ['type' => 'VARCHAR', 'constraint' => 255], // Anda dapat menyesuaikan panjang maksimal sesuai kebutuhan
			'keadaan_bus' => [
				'type' => 'ENUM',
				'constraint' => "'baik', 'buruk', 'dalam perbaikan'",
				'default' => 'baik'
			],
			'status_bus' => [
				'type' => 'ENUM',
				'constraint' => "'masuk', 'keluar'",
				'default' => 'masuk'
			],
		]);
		
		$this->forge->addKey('nopol', TRUE);
		$this->forge->createTable('data_bus');
		
	}

	public function down()
	{
    	$this->forge->dropTable('data_bus');
	}


	
}
