<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;

        public $q;
        public $search_term;

public function mount()
{
    $this->fill(request()->only('q'));
    $this->search_term = '%' .$this->q . '%';
}

    public function render()
    {
        $products = Product::where('name', 'like',$this->search_term)->paginate(9);
        return view('livewire.search-component',['products'=>$products]);
    }
}
