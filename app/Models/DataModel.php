<?php namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table      = 'test_data';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = [];

    //data_key varchar(200),
    //data_value text

    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM test_data");
        $result =  $query->getResult();
        return $result;
    }

    public function writeData($key, $value)
    {
        $query = "INSERT INTO test_data(data_key, data_value) VALUES('$key', '$value')";
        $this->db->query($query);
    }
}
