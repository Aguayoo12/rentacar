<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminCars extends Component
{
    #[On('updatedCar')]
    public function render()
    {
        $cars = Car::all();
        return view('livewire.admin-cars', compact('cars'));
    }

    public function brand(Car $car){
        return Brand::findOrFail($car->brand_id)->get('name');
    }
}
