<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ViewCar extends Component
{
    public $car;
    public $initDate;
    public $endDate;
    public $differenceInDays;
    public $showModal = false;
    
    #[Validate('required|min:16|max:16',message: 'Escribe el numero de tarjeta')]
    public $creditCard;
    #[Validate('required|min:3|max:4', message: 'Escribe el numero secreto')]
    public $cvv;
    #[Validate('required', message: 'Ingresa el mes de expiracion')]
    public $expirationMonth;
    #[Validate('required', message: 'Ingresa el añoo de expiracion')]
    public $expirationYear;
    #[Validate('required|min:10', message: 'Ingresa el nombre del propietario')]
    public $holderName;

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

    public function mostrarModal() {
        $this->showModal = true;
    }
    public function closeModal() {
        $this->showModal = false;
    }
    public function rent(){
        $this->validate();
        $this->car->users()->attach(Auth::user()->id, ['fisrtDafte' => session('initDate'), 'lastDafte' => session('endDate')]);
        return to_route('cars.index')->with('status', 'Reservado con exito');
    }
}
