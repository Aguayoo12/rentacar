<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminBrands extends Component
{
    public $search;

    #[On('brandUpdated')] 
    public function render()
    {
        $brands = Brand::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.admin-brands', compact('brands'));
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        $this->dispatch('brandUpdated');
    }
}
