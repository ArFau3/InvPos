<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class ScanProduct extends Component
{
    public $cari;
    public $pick;

    public function addProduct($id){
        $this->dispatch('productAdded', id: $id);
    }

    #[On('searched')] 
    public function updatePostList($cari)
    {
        $this->cari = $cari;
        if($cari){
            $this->pick = true;
        }else{
            $this->pick = false;
        }
    }

    public function render()
    {
        return view('livewire.scan-product', [
            'products' => Product::where('nama', 'like', "%".$this->cari.'%')->get(),
        ]);
    }
}
