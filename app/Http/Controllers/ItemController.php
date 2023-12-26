<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index(){
        $baseURL = env('MANCING_DB_BASE_URL');
        $imageURL = env('MANCING_DB_IMAGE_BASE_URL');
        $apiKey = env('MANCING_DB_API_KEY');

        // Hit APIx
    }
}
