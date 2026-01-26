<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';
 
    public function resetSearch()
    {
        $this->search = '';
    }

    public function render()
    {
        $this->dispatch('searched', cari: $this->search); 
        return view('livewire.search-bar');
    }
}
