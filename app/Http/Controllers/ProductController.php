<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductController extends Controller
{
    
    public function index(ProductRepositoryInterface $repository)
    {
        $product = $repository->getAll();
        return response()->json(new ProductCollection($product));
    }

    public function store(ProductRequest $request, ProductRepositoryInterface $repository)
    {
        $product = $repository->storeProduct($request);
        return response()->json(new ProductResource($product));
    }

    public function show($id, ProductRepositoryInterface $repository)
    {
        $product = $repository->showProduct($id);
        return response()->json(new ProductResource($product));
    }
    
    public function destroy($id, ProductRepositoryInterface $repository)
    {
        $repository->deleteProduct($id);
    }
}
