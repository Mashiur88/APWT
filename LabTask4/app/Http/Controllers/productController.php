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
                'pprice'=>'required|integer',
                'pimage'=>'required'
            ],
            [
                'pname.required'=>'Product name required',
                'pdesc.required'=>'Description required',
                'status.required'=>'select a status',
                'pprice.required'=>'price field required',
                'pprice.integer'=>'price must be an integer value',
                'pimage.required'=>'must input an image file'
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
        return redirect()->route('product.list');
        
    }
    function viewProduct(Request $request)
    {
        $products=Product::all();
        if($products)
        {
            
        return view('Pages.product.list')->with('product',$products);
        }
    }
    function editProduct(Request $request)
    {
        $id=$request->id;
        $products=Product::where('id',$id)->first();
        if($products)
        {
         //   
        return view('Pages.product.edit')->with('product',$products);
        } 
    }
    function update(Request $request)
    {
        $id=$request->id;
        $product=Product::where('id',$id)->first();
        $product->p_name=$request->pname;
        $product->description=$request->pdesc;
        $product->status=$request->status;
        $product->price=$request->pprice;
        $product->image=$request->pimage;
        $product->save();
        return redirect()->route('product.list');

    }
    function deleteProduct(Request $request)
    {
        $id=$request->id;
        $product=Product::where('id',$id)->first();
        $product->delete();
        return redirect()->route('product.list');
    }
}
