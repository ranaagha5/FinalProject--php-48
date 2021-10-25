<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
public function showCategories()
{
    $categories = DB::table('categories')
            ->leftJoin('products', 'products.category_id', '=', 'categories.id')
            ->select(
                'categories.*',
                DB::raw('count(products.category_id) AS totalProducts'))
                ->groupBy('categories.id')
                ->groupBy('categories.name')
                ->groupBy('categories.country')
                ->get();
    return view('management.view-categories',compact('categories'));

}

public function categoriesSelection()
{
    $categories=Category::all();
    return view('management.add-product',compact('categories'));
}


public function deleteCategory($id)
{
    $category=Category::where('id',$id)->first();
    Category::where('id',$id)->delete();
    return redirect('panel/categories')->with('status', "{$category->name} deleted!");
}
public function addCategory(Request $request)
{
    $category= new Category([
        'name' => $request->get('categoryName'),
        'country' => $request->get('categoryCountry')
    ]);
    $category->save();
    return redirect('/panel/add/category')->with('status', "{$category->name} Added!");
}
public function editForm($id)
{
    $category=Category::where('id',$id)->first();
    return view('management.edit-category',compact('category'));

}
public function updateCategory(Request $request,$id)
{

    $category =Category::find($id);
    $category->name=$request->categoryName;
    $category->country=$request->categoryCountry;
    $category->save();
    return redirect('panel/categories')->with('status', "{$category->name} Updated!");


}

}
