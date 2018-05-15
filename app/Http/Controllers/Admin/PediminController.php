<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Pedido;

class PediminController extends Controller
{

    protected $user;
    protected $pedido;

    public function __construct(User $user, Pedido $pedido) {
        $this->user = $user;
        $this->pedido = $pedido;
    }

    public function index() {
        $pedidos = $this->pedido->where('active', true)->get();

        return view('admin.pedimin.index-pedido', compact('pedidos'));
    }

    public function pedidos($pedido_id) {
        $pedido = $this->pedido->find($pedido_id);

        $products = $pedido->products;

        $user = $this->user->find($pedido->user_id);

        return view('admin.pedimin.pedido-detalhe', compact('pedido', 'user', 'products'));

       
    }

    public function pedidoPronto($pedido_id) {  
        $pedidoPronto = $this->pedido->pedidoPronto($pedido_id);

        return redirect()->route('user-pedido.index');

    }

    public function historic() {
        $pedidos = $this->pedido->all();

        return view('admin.pedimin.historic', compact('pedidos'));
    }
}
