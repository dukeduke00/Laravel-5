<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function getAllProducts()
    {
        $allProducts = ProductModel::all();
        return view("product", compact("allProducts"));
    }

    public function formAddProduct()
    {
        return view("addProduct");
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:3|max:25",
            "description" => "required|string|min:5|max:100",
            "amount" => "required|integer|min:0",
            "price" => "required|numeric|min:0",
            "image" => "required|string",
        ]);

        ProductModel::create([
            "name" => $request->get("name"),
            "description" => $request->get("description"),
            "amount" => $request->get("amount"),
            "price" => $request->get("price"),
            "image" => $request->get("image"),
        ]);

        return redirect("/admin/all-products");
    }
}
