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
}
