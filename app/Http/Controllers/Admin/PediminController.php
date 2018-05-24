<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Pedido;

use Gate;

class PediminController extends Controller
{

    protected $user;
    protected $pedido;
    private $paginate = 10;

    public function __construct(User $user, Pedido $pedido) {
        $this->user = $user;
        $this->pedido = $pedido;
    }

    public function index() {
        $pedidos = $this->pedido->where('active', true)->paginate($this->paginate);

        if(Gate::denies('view_pedido', $pedidos))
            abort(403, 'Inautorizado!');

        return view('admin.pedimin.index-pedido', compact('pedidos'));
    }

    public function pedidos($pedido_id) {
        $pedido = $this->pedido->find($pedido_id);

        $products = $pedido->products;

        $user = $this->user->where('id', $pedido->user_id)->with('addresses')->get()->first();
    
        if(Gate::denies('view_pedido', $pedido))
            abort(403, 'Inautorizado!');

        return view('admin.pedimin.pedido-detalhe', compact('pedido', 'user', 'products'));

       
    }

    public function pedidoPronto($pedido_id) {  
        $pedidoPronto = $this->pedido->pedidoPronto($pedido_id);

        if(Gate::denies('ready_pedido', $pedidoPronto))
            abort(403, 'Inautorizado!');

        return redirect()->route('user-pedido.index');

    }

    public function historic() {
        $pedidos = $this->pedido->all();

        if(Gate::denies('historico_pedido', $pedidos))
        abort(403, 'Inautorizado!');

        return view('admin.pedimin.historic', compact('pedidos'));
    }
}
