<?php

namespace App\Livewire\Table;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

use function Termwind\render;

class Pos extends Component
{
    public $pick = false;
    public $cari;
    public Collection $pos;

    public function mount()
    {
        $this->pos = collect([]);
    }

    #[On('productAdded')] 
    public function addProduct($id)
    {
        $product = Product::findOrFail($id);
        $pos = $this->pos->where("nama",$product->nama)->first();
        
        if($pos){
            // HACK: double filter, kalau local var nda update ke global var sedangkan dpt key juga bingung
            
            $this->pos->where("nama",$product->nama)->first()['amount'] += 1;
            $this->pos = $this->pos;
            dd($this->pos);
        }else{
            $new_post = [
                "nama" => $product->nama,
                "amount" => 1,
                "price" => $product->price,
            ];

            $this->pos->push($new_post);
        }
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
        return view('livewire.table.pos');
    }
}
