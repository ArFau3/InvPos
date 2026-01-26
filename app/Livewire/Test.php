<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Stock;
use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.test', [
            'products' => ["dsfs","fas"],
        ]);
    }
}
