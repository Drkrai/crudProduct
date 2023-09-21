<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function __construct() {
        $this->product = new ProductModel;
    }


    public function index()
    {
        $data['product']=$this->product->findAll();
        return view('ProductView',$data);
    }
}
