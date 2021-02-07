<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select('*');
        return view('product/index', compact('products'));
    }

    public function datatables()
    {
        $query = Product::select('*');


        return datatables($query)->toJson();
    }

    public function datatablesIndex()
    {
        return view('product/datatables');
    }
}
