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
            'status' => $request->status,
            'type' => $request->type,
            'detail' => $request->detail,
        ]);

            return redirect('/items');
        }
    //アイテム削除
    public function destroy(Request $request, item $id)
    {
        $id->delete();
        return redirect('/items');
    }


    /**
     * 詳細画面の表示
     */
    public function detail($id)
    {
        $item = Item::where('id', $id)->first();
        return view('detail.detail', compact('item'));
    }

    /**
     * 編集画面の表示
     */
    // public function editing($id)
    // {
    //     $items = Item::find($id);
    //     return view('editing.editing')->with('item', $items);
    // }
    public function editing($id)
    {
        $item = Item::find($id);
        return view('editing.editing', compact('item'));
    }


        /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
        {
        $item = Item::find($id);
        $item->name = $request->input('name');
        $item->type = $request->input('type');
        $item->detail = $request->input('detail');

        $item->save();

        return redirect('/items');
    }
}
