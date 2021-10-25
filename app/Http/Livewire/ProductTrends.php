<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class ProductTrends extends Component
{
    public $products;
    public function render()
    {
        $this->products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->get(['products.*', 'categories.name', 'categories.country']);

        return view('livewire.product-trends');
    }

}
