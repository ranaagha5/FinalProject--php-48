<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
public function showProducts()
{
    $products=Product::join('categories', 'products.category_id', '=', 'categories.id')
    ->get(['products.*', 'categories.name']);

    return view('management.view-products',compact('products'));

}
public function addProduct(Request $request)
{
    $product =new Product([
        'title' => $request->get('productTitle'),
        'stock' => $request->get('productStock'),
        'image_url' => $request->get('productImg'),
        'description' => $request->get('productDescription'),
        'price' => $request->get('productPrice'),
        'category_id' => $request->get('productCategory')


    ]);
    $product->save();
    return redirect('/panel/add/product')->with('status', "{$product->name} Added!");


}
public function deleteProduct($id)
{
    $product=Product::where('id',$id)->first();
    Product::where('id',$id)->delete();

     return redirect('panel/products')->with('status', "{$product->title} deleted!");

}
public function editForm($id)
{
    $product=Product::find($id);
    $categories=DB::table('categories')->where('id',"!=" ,$product->category_id)->get();
    return view('management.edit-product',compact('categories','product'));

}
public function updateProduct(Request $request,$id)
{
    $product =Product::find($id);
    $product->  title = $request->productTitle;
    $product->  stock = $request->productStock;
    $product-> image_url = $request->productImg;
    $product-> description = $request->productDescription;
    $product->  price = $request->productPrice;
    $product-> category_id = $request->productCategory;
    $product->save();

     return redirect('panel/products')->with('status', "{$product->title} updated!");


}

public function cart()
{
    $cart_products=array();

    $products=request()->session()->get('products');


    if(!isset($products))
        $products=array();


    foreach ($products as $product) {

        array_push($cart_products,Product::find($product));

    }


     return view('Fashion.cart',compact('cart_products'));
}
public function search(Request $request)
{

  $products = Product::where('products.title','LIKE','%'.$request->search.'%')->get();
    return view('Fashion.search',compact('products'));

}
}

