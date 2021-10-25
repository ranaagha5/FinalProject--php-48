<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PhpParser\Node\Expr\Isset_;

class CartCounter extends Component
{
    protected $listeners  = ['addToCart' => 'store'];

    public $count;
    public $products;

    public function store($pro)
    {
    if(!session()->has('products'))
        {
            $this->products=array();

        }

        array_push($this->products,$pro);
        session()->put('products', $this->products);
        // session()->flush();



    }
    public function render()
    {


            $this->products= session()->get('products');
            if(isset($this->products))
                    $this->count= count(session()->get('products'));




        return view('livewire.cart-counter');

    }

    public function goToCart()
    {
         return redirect('/cart');

    }
}
