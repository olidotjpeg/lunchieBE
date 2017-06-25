<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Product;

class LunchController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->input('name');

        $product->save();

        return $product;
    }
    
    public function delete($id)
    {
        $product = Product::where('id', $id)->delete();

        return response()->json([
            'message' => 'Produktet er blevet slettet',
            'id' => $id
        ]);
    }

    public function clear()
    {
        $products = Product::all();

        foreach ($products as $item) {
            $selectedItem = Product::where('id', $item->id)->delete();
        }

        $products = Product::all();

        return $products;
    }
}
