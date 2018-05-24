<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Address;

class AddressController extends Controller
{

    protected $address;

    public function __construct(Address $address) {
        $this->address = $address;
    }

    public function config() {
        return view('client.config.index');
    }

    public function configEnd() {
        $addresses = auth()->user()->addresses;

        return view('client.config.end.index', compact('addresses'));
    }

    public function create() {
        return view('client.config.end.create');
    }

    public function endPost(Request $request) {
        $user = auth()->user();

        $user->addresses()->create($request->all());

        return redirect()->route('end.config');
    }
}
