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

    public function edit($id)
    {
        $model = new Product_model();
        $data['product'] = $model->getProduct($id)->getRow();
        echo view('edit_product_view', $data);
    }

    public function update()
    {
        $model = new Product_model();
        $id = $this->request->getPost('id_produit');
        $data = array(
            'product_name' => $this->request->getPost('nom_produit'),
            'product_price' => $this->request->getPost('prix_produit'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to(base_url() . '/product');
    }

    public function delete($id)
    {
        $model = new Product_model();
        $model->deleteProduct($id);
        return redirect()->to(base_url() . '/product');
    }
}
