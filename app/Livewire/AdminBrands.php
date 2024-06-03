<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminBrands extends Component
{
    

    #[On('brandUpdated')] 
    public function render()
    {
        $brands = Brand::all();
        return view('livewire.admin-brands', compact('brands'));
    }
}
