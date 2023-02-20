<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public $min_value = 0;
    public $max_value = 1000;

   




    public function render()
    {
        $products = Product::whereBetween('amazon_price',[$this->min_value,$this->max_value])->paginate(9);
        return view('livewire.shop-component',['products'=>$products]);
    }
}
