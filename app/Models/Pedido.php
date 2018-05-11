<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
