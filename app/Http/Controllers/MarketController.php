<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(12);
        $basket = Basket::getBasket()->products;

        return view('market.index', compact('products', 'basket'));
    }
}
