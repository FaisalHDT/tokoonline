<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['message'=>'Succes','data'=>$products]);
    }

    public function show($id)

    {
       $pdoduct= Product::find($id);

       return response()->json(['message'=>'Succes','data'=>$pdoduct]);
    }

    public function store(Request $request)
    {
        $pdoduct=Product::create($request->all());

        return response()->json(['message'=>'Succes','data'=>$pdoduct]);
    }
}
