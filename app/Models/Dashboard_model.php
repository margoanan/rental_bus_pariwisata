<?php namespace App\Models;
use CodeIgniter\Model;
class Dashboard_model extends Model
{
protected $table = 'bus_pelanggan';
public function getCountPel()
{
return $this->db->table("bus_pelanggan")->countAll();
}
public function getCountBus()
{
return $this->db->table("data_bus")->countAll();
}
}
