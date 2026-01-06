<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Table extends Component
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
        return view('livewire.table', [
            'products' => Product::where('nama', 'like', "%".$this->cari.'%')->get(),
        ]);
    }
}
