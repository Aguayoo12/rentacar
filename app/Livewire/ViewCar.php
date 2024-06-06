<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewCar extends Component
{
    public $car;
    public $initDate;
    public $endDate;
    public $differenceInDays;

    public function mount($car, $initDate, $endDate)
    {
        $this->car = $car;
        $this->initDate = Carbon::parse($initDate)->locale('es_ES')->isoFormat('dddd, DD [de] MMMM [de] YYYY');
        $this->endDate = Carbon::parse($endDate)->locale('es_ES')->isoFormat('dddd, DD [de] MMMM [de] YYYY');
        $this->differenceInDays = Carbon::parse($initDate)->diffInDays(Carbon::parse($endDate));
    }
    public function render()
    {
        return view('livewire.view-car');
    }

    public function rent(){
        $this->car->users()->attach(Auth::user()->id, ['fisrtDafte' => session('initDate'), 'lastDafte' => session('endDate')]);
        return to_route('cars.index');
    }
}
