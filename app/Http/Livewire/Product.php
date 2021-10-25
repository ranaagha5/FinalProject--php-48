<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;
use App\Product as Pro;
use Illuminate\Support\Facades\DB;


class Product extends Component
{
    public $products=array();
    public $cate;

         protected $listeners  = ['showProducts' => 'show'];



    public function show($cate)
    {
        $this->cate=$cate;

    }
    public function addToCart()
    {
        $this->cate='kids';
    }

    public function render()
    {
        $cates = array("men", "women", "kids");
        if(in_array($this->cate,$cates))
            {
            $this->products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.name','=',$this->cate)
            ->get(['products.*', 'categories.name', 'categories.country']);
            }
        else
        {
            $this->products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->get(['products.*', 'categories.name', 'categories.country']);
        }
        return view('livewire.product');
    }

}
