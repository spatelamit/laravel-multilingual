<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {


        // $products = Product::all();
        $products = Product::leftJoin('product_translations', 'products.id', '=', 'product_translations.product_id')
            ->where('product_translations.language', '=', app()->getLocale())
            ->select('products.*', 'product_translations.name as translated_name', 'product_translations.description as translated_description')
            ->get();

        return view('products.list', compact('products'));
    }

    public function show($locale, $id)
    {
        $product = Product::with([
            'translations' => function ($query) {
                $query->where('language', '=', app()->getLocale());
            }
        ])
            ->findOrFail($id);
        return view('products.show', compact('product'));
    }
}
