<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;
class ProductController extends BaseController
{
    private $product;
    private $category;
    public function __construct() {
        $this->product = new ProductModel;
        $this->category = new CategoryModel;
    }
    public function homePage()
    {
        $data['category']=$this->category->findAll();
        return view('CategoryView',$data);
    }

    public function insertCategory(){
        $data=['ProductCategory'=>$this->request->getVar('ProductCategory')
    ];
    $this->category->save($data);
    return redirect()->to('CategoryView');
    }

    public function showInsertCategory(){
        return view('insertCategory');
    }
    public function showInsertProduct(){
        $data=[
            'products'=>$this->product->findAll(),
            'pro'=>$this->category->findAll(),
        ];
        return view('insertProduct',$data);
    }


    public function showProduct($id){
        $data=[
            'products'=>$this->product->findAll(),
            'pro'=>$this->product->where('ProductCategory',$id)->findAll(),
        ];
        return view('productView',$data);
    }

    public function insertProduct(){
        $data=[
            'ProductName'=>$this->request->getVar('ProductName'),
            'ProductDescription'=>$this->request->getVar('ProductDescription'),
            'ProductQuantity'=>$this->request->getVar('ProductQuantity'),
            'ProductPrice'=>$this->request->getVar('ProductPrice'),
            'ProductCategory'=>$this->request->getVar('ProductCategory'),
    ];
    $this->product->save($data);
    return redirect()->to('productView');
    }

}
