<?php

namespace App\Livewire\Table;

use App\Models\Product;
use App\Models\Stock as ModelsStock;
use Livewire\Attributes\On;
use Livewire\Component;

class Stock extends Component
{
    public $cari;
    
    #[On('searched')] 
    public function updatePostList($cari)
    {
        $this->cari = $cari;
        // $this->render();
    }

    public function render()
    {
        return view('livewire.table.stock', [
            'products' => Product::where('nama', 'like', "%".$this->cari.'%')->get(),
            'stocks' =>ModelsStock::all(),
        ]);
    }
}
