<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        $stores = Store::with('admin')->paginate(3);
        return view('store.index', compact('stores'));
    }
     
}
