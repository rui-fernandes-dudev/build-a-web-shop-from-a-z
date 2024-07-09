<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class StoreFront extends Component
{
    public function getProductProperty()
    {
        return Product::query()->get();
    }

    public function render()
    {
        return view('livewire.store-front');
    }
}
