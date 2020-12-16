<?php

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    protected $table = 'product';

    public function getProduct($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['product_id' => $id]);
        }
    }

    public function saveProduct($data)
    {
        $this->db->table($this->table)->insert($data);
    }

    public function updateProduct($data, $id)
    {
        $this->db->table($this->table)->update($data, array('product_id' => $id));
    }
}
