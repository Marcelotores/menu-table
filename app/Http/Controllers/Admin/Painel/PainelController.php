<?php

namespace App\Http\Controllers\Admin\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index() {
        return view('admin.painel.index');
    }
}
