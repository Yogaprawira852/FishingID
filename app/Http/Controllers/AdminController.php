<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Item::all();
        $categories = Category::all();

        $totalItems = $items->count();
        $totalCategories = $categories->count();

        return view('admin.dashboard', [
            'totalItems' => $totalItems,
            'totalCategories' => $totalCategories,
        ]);
    }

    public function item()
    {
        $items = Item::with('category')->paginate(5);

        return view('admin.item.index', compact('items'));
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        $item->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }

    public function create()
    {
        return view('admin/item/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'totalSold' => 'required|numeric',
            'rating' => 'required|numeric',
            'category_id' => 'required|numeric',
        ]);

        $title = htmlspecialchars($request->title, ENT_QUOTES, 'UTF-8');
        $body = htmlspecialchars($request->body, ENT_QUOTES, 'UTF-8');

        $item = Item::create([
            'title' => $title,
            'price' => $request->price,
            'body' => $body,
            'totalSold' => $request->totalSold,
            'rating' => $request->rating,
            'category_id' => $request->category_id,
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $item->update(['image' => $imagePath]);
        }

        return redirect('/admin/itemManagement')->with('success', 'Item created successfully.');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('admin.item.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // ... your other validation rules
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $item = Item::findOrFail($id);
    
        $title = htmlspecialchars($request->title, ENT_QUOTES, 'UTF-8');
        $body = htmlspecialchars($request->body, ENT_QUOTES, 'UTF-8');
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($item->image) {
                Storage::delete('public' . $item->image);
            }
        
            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
            $item->update(['image' => $imagePath]);
        }
    
        $item->update([
            'title' => $title,
            'price' => $request->price,
            'body' => $body,
            'totalSold' => $request->totalSold,
            'rating' => $request->rating,
        ]);
    
        return redirect('/admin/itemManagement')->with('success', 'Item updated successfully.');
    }
}