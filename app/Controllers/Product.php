<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product_model;

class Product extends Controller
{
    public function index()
    {
        $model = new Product_model();
        $data['product'] = $model->getProduct();
        echo view('product_view', $data);
    }

    public function add_new()
    {
        echo view('add_product_view');
    }

    public function save()
    {
        $model = new Product_model();
        $data = array(
            'product_name' => $this->request->getPost('nom_produit'),
            'product_price' => $this->request->getPost('prix_produit')
            // 'product_id' => $this->request->getPost('id_produit')
        );

        $model->saveProduct($data);
        return redirect()->to(base_url() . '/product');
    }
}
