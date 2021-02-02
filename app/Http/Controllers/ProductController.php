<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductCollection;
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
        if($product){
            return response('Produto cadastrado', 201);
        }
        else{
            return response('Ocorreu um erro desconhecido', 400);
        }
    }

    public function show($id, ProductRepositoryInterface $repository)
    {
        $product = $repository->showProduct($id);
        return response()->json($product);
    }
    
    public function destroy($id, ProductRepositoryInterface $repository)
    {
        $product = $repository->deleteProduct($id);
        if($product){
            return response('Produto excluído com sucesso', 204);
        }
        else{
            return response('Ocorreu um erro desconhecido', 400);
        }
    }
}
