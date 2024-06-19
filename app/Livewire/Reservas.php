<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class Reservas extends Component
{
    public $cars;
    public $now;
    public $car;
    public $id;
    public $fistDate;
    public $lastDate;
    public $showModal = false;
    public $showModal1 = false;
    public function mount()
    {
        $this->cars = Auth::user()->cars;
        $this->now = Carbon::now()->toDateString();
    }
    public function render()
    {
        $this->cars = Auth::user()->cars;
        return view('livewire.reservas');
    }

    public function parseDate($date)
    {
        return Carbon::parse($date)->locale('es_ES')->isoFormat('dddd, DD [de] MMMM [de] YYYY');
    }

    public function setCarId($carID, $fistDate, $lastDate){
        $this->fistDate = $fistDate;
        $this->lastDate = $lastDate;
        $this->id = $carID;
        $this->showModal = true;
    }

    public function setCarId1($carID, $fistDate, $lastDate){
        $this->fistDate = $fistDate;
        $this->lastDate = $lastDate;
        $this->id = $carID;
        $this->showModal1 = true;
    }

    public function closeModal(){
        $this->showModal = false;
    }

    public function closeModal1(){
        $this->showModal1 = false;
    }

    public function borrar(){
        DB::table('users_cars')
        ->where('user_id', Auth::user()->id)
        ->where('car_id', $this->id)
        ->where('fisrtDafte', $this->fistDate)
        ->where('lastDafte', $this->lastDate)
        ->delete();

        $this->showModal = false;
        $this->cars = Auth::user()->cars;
        session()->flash('status', 'Cancelado correctamente');

    }
    public function delete(){
        DB::table('users_cars')
        ->where('user_id', Auth::user()->id)
        ->where('car_id', $this->id)
        ->where('fisrtDafte', $this->fistDate)
        ->where('lastDafte', $this->lastDate)
        ->update(['lastDafte' => Carbon::now()->toDateString()]);

        $this->showModal1 = false;
        $this->cars = Auth::user()->cars;
        session()->flash('status', 'Devuelto correctamente');
    }
}
