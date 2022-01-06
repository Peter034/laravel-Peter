<?php

namespace App\Http\Controllers;

use App\Models\ProductMedia;
use Illuminate\Http\Request;

class ProductMediaController extends Controller
{
    public function index()
    {
        $x = ProductMedia::all();
        return response()->json($x);
    }
}
