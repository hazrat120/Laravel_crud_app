<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function ordershow(){
        $orders = Order::all();
        return view('toys.product_order', compact('orders'));

    }

    public function productshow(){
       $products = Product::with('orders')->get();
       return view('toys.product_order', compact('products'));
    }
}
