<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;

class Pedido extends Model
{
    protected $fillable = [
        'user_id',
        'date', 
        'total', 
    ];

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pedidoPronto($pedido_id) {
        $pedido = $this->find($pedido_id);
        $pedido->active = false;
        return $pedido->save();  
    }

    public function doPedido($request) {

       DB::beginTransaction();
        
        $user = auth()->user();

        $productsForm = $request->all();

        $prods = Product::find($productsForm);

        $price = 0;

        foreach ($prods as $prod) {
            $price += $prod->price;
        }

        
        $pedido = $this->create([
            'user_id' => $user->id,
            'date' => date("Y-m-d "),
            'total' => $price
        ]);

        $pedido->products()->attach($productsForm);

        $produtos = $pedido->products;

        if (!empty($pedido) && !empty($produtos)) {
            DB::commit();
            return [
                'success' => true,
                'message' => 'Pedido efetuado com sucesso!'
            ];
        }   
        else {
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Erro ao fazer pedido!'
            ];
        }

    }
}
