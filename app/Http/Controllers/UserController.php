<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $items = Item::with('category')->paginate(8);

        return view('user.dashboard', ['items' => $items]);

    }

    public function showItem($id)
    {
        $item = Item::with('category')->find($id);

        return view('item', ['item' => $item]);
    }

    public function search(Request $request)
{
    $query = $request->input('search');

    // Sanitize the search query
    $query = trim($query);
    $query = str_replace(' ', '%', $query);


    $items = Item::where('title', 'like', '%' . $query . '%')->get();


    if ($items->isEmpty()) {
        return redirect()->back()->with('message', 'No results found for your search: ' . $query);
    }

    return view('user.search', ['items' => $items]);
}
}
