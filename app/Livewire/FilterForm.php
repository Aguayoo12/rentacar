<?php

namespace App\Livewire;

use App\Models\Car;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FilterForm extends Component
{
    public $initDate;
    public $endDate;
    public $city;
    public $cities;
    public $people;

    public function mount()
    {
        $this->initDate = session('initDate') ? session('initDate') : Carbon::now()->toDateString();
        $this->endDate = session('endDate') ? session('endDate') : Carbon::now()->addDays(2)->toDateString();
        $this->city = session('city') ? session('city') : null;
        $this->people = session('people') ? session('people') : null;
        $this->cities = Car::select('city')->distinct()->get();
    }

    public function render()
    {
        return view('livewire.filter-form');
    }

    public function submit()
    {
        session(['initDate' => $this->initDate, 'endDate' => $this->endDate, 'city' => $this->city, 'people' => $this->people]);
        return to_route('cars.index');
    }
}
