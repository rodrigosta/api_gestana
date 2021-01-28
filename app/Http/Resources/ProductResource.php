<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        dd($request);
        return [
            'nome' => $request->name,
            'valor_unitario' => $request->price,
            'qtde_estoque' => $request->quantity
            
        ];
    }
}
