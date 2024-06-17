<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Attributes\On;
use Livewire\Component;

class CarsView extends Component
{
    public $cars;
    public $initDate;
    public $endDate;
    public $minPower = 1;
    public $maxPower = 999;

    public $minPrice = 1;
    public $maxPrice = 999;

    public $transmissions = [];
    public $types = [];
    public $fuels = [];

    
    public function mount(){
        $this->initDate = session('initDate');
        $this->endDate = session('endDate');
    }

    public function appliFilter(){
        $this->cars = Car::query()
        ->when($this->minPower, function ($query) {
            $query->where('power', '>=', $this->minPower);
        })
        ->when($this->maxPower, function ($query) {
            $query->where('power', '<=', $this->maxPower);
        })
        ->when($this->minPrice, function ($query) {
            $query->where('price', '>=', $this->minPrice);
        })
        ->when($this->maxPrice, function ($query) {
            $query->where('price', '<=', $this->maxPrice);
        })
        ->when($this->transmissions, function ($query) {
            $query->where('transmission', $this->transmissions);
        })
        ->when($this->types, function ($query) {
            $query->whereIn('type', $this->types);
        })
        ->when($this->fuels, function ($query) {
            $query->whereIn('fuel', $this->fuels);
        })
        ->get();
    }

    public function render()
    {
        return view('livewire.cars-view');
    }

    public function showCar($id){
        return to_route('cars.show', ['car' => $id]);
    }
}
