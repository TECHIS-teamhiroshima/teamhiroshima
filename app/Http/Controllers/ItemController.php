<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    //
    public function items(Request $request)
    {
        $items = Item::orderBy('id', 'asc')->get();
        return view('items.productlist', [
            'items' => $items,
        ]);
    }
}
