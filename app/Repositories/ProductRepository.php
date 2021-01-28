<?php

namespace App\Repositories;

use App\Product;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface{
    
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function getAll()
    {
        return $this->productModel->all();
    }

    public function storeProduct($request){

        DB::beginTransaction();
        $product = Product::create($request->all());
        DB::commit();
        return $product;
    
    }

    public function showProduct($id){

        $product = Product::findOrFail($id);
        return $product;
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return $product;
    }
}

