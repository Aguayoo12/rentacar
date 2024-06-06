<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Image;
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

    public function destoy(Car $car){
        $car->delete();
        Image::where('car_id', $car->id)->delete();
        $this->dispatch('updatedCar');
    }
}
