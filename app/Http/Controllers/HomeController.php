<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::with('category')->paginate(8);

        return view('home', ['items' => $items]);
    }
}