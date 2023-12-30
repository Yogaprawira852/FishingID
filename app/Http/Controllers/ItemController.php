<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index', compact('items'));
    }
    

    public function create()
    {
        // Tampilkan halaman form untuk menambah item
        return view('admin/item/create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'title' => 'required|string',
            'price' => 'required|string',
            'body' => 'required|string',
            'image' => 'required|string',
            'totalSold' => 'required|integer',
            'rating' => 'required|integer',
        ]);

        // Simpan data item ke dalam database
        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item added successfully');
    }

    public function edit(Item $item)
    {
        // Tampilkan halaman form untuk mengedit item
        return view('admin.item.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'sold' => 'required|integer',
            'rating' => 'required|numeric',
            'category' => 'required|string',
        ]);

        // Perbarui data item di dalam database
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Item $item)
    {
        // Hapus item dari database
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }
}


