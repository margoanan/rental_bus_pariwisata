<?php
namespace App\Models;

use CodeIgniter\Model;

class Bus_model extends Model
{
    protected $table = 'data_bus';
    protected $primaryKey = 'nopol';
    protected $allowedFields = ['nopol','nama_bus', 'keadaan_bus', 'status_bus'];

    public function getBus($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}