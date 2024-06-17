<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Image;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminCars extends Component
{
    public $search;
    #[On('updatedCar')]
    public function render()
    {
        $cars = Car::query()
        ->where('name', 'like', '%' . $this->search . '%')
        ->orWhere('seats', 'like', '%' . $this->search . '%')
        ->orWhere('transmission', 'like', '%' . $this->search . '%')
        ->orWhere('power', 'like', '%' . $this->search . '%')
        ->orWhere('price', 'like', '%' . $this->search . '%')
        ->orWhere('km', 'like', '%' . $this->search . '%')
        ->orWhere('type', 'like', '%' . $this->search . '%')
        ->orWhere('fuel', 'like', '%' . $this->search . '%')
        ->orWhere('city', 'like', '%' . $this->search . '%')
        ->orWhereHas('brand', function($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })
        ->get();
        return view('livewire.admin-cars', compact('cars'));
    }

    public function destoy(Car $car){
        $car->delete();
        $this->dispatch('updatedCar');
    }
}
