<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Item;

class ItemController extends Controller
{
    //アイテム一覧
    public function items(Request $request)
    {
        $items = Item::orderBy('id', 'asc')->get();
        return view('items.productlist', [
            'items' => $items,
        ]);
    }
    //アイテム登録
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        //アイテム作成
        item::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'status' =>  "1",
            'type' => $request->type,
            'detail' => $request->detail
        ]);

            return redirect('/items');
        }
    //アイテム削除
    public function destroy(Request $request, item $item)
    {
        $item->delete();
        return redirect('/items');
    }
}
