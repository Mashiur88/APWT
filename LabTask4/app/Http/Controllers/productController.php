<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    //
    function homeView()
    {
        return view('Pages.home');
    }
    function addProduct()
    {
        return view('Pages.Product.add');
    }
    function submitProduct(Request $request)
    {
        $this->validate(
            $request,
            [
                'pname'=>'required',
                'pdesc'=>'required',
                'status'=>'required',
                'price'=>'required|integer',
                'pimage'=>'required'
            ],
            [
                'pname.required'=>'Product name required',
                'pdesc.required'=>'Description required',
                'status.required'=>'select an status',
                'price.required'=>'price field required',
                'price.integer'=>'price must be an integer value',
                'pimage.required'=>'must input a image file'
            ]
        );
        echo "ok";
        $product=new Product();
        $product->p_name=$request->pname;
        $product->description=$request->pdesc;
        $product->status=$request->status;
        $product->price=$request->pprice;
        $product->image=$request->pimage;
        $product->save();
        return view('welcome')->with('product',$product);
        
    }
}
