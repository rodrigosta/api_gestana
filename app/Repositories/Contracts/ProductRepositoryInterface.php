<?php

namespace App\Repositories\Contracts;


interface ProductRepositoryInterface {
    
    public function getAll();

    public function storeProduct($request);

    public function showProduct($id);

    public function deleteProduct($id);
}