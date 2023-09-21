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


    public function showProduct($id){
        $data=[
            'products'=>$this->product->findAll(),
            'pro'=>$this->product->where('ProductCategory',$id)->findAll(),
        ];
        return view('productView',$data);
    }

    public function showCategory(){
        $data=[
            'products'=>$this->product->find('ProductCategory'),
            'pro'=>$this->category->find('ProductCategory'),
        ];
        return view('insertProduct',$data);
    }
}
