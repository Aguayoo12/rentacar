<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ReservasAdmin extends Component
{
    public $now;
    public $search;

    public $showModal = false;
    public $userId;
    public $id;
    public $fistDate;
    public $lastDate;

    public function mount()
    {
        $this->now = Carbon::now()->toDateString();
    }
    public function render()
    {
        $reservas =  DB::table('users_cars')
        ->join('users', 'users_cars.user_id', '=', 'users.id')
        ->join('cars', 'users_cars.car_id', '=', 'cars.id')
        ->join('brands', 'cars.brand_id', '=', 'brands.id')
        ->select(
            'users.id as user_id',
            'users.name as user_name',
            'users.surname as user_surname',
            'users.profile_photo_path as photo',
            'users.email',
            'cars.id as car_id',
            'cars.name as car_name',
            'cars.city as car_city',
            'brands.name as brand_name',
            'users_cars.fisrtDafte',
            'users_cars.lastDafte'
        )
        ->where('users.email', 'like', '%' . $this->search . '%')
        ->orWhere('users.name', 'like', '%' . $this->search . '%')
        ->orWhere('users.surname', 'like', '%' . $this->search . '%')
        ->orWhere('cars.name', 'like', '%' . $this->search . '%')
        ->orWhere('cars.city', 'like', '%' . $this->search . '%')
        ->orWhere('brands.name', 'like', '%' . $this->search . '%')
        ->orWhere('users_cars.fisrtDafte', 'like', '%' . $this->search . '%')
        ->orWhere('users_cars.lastDafte', 'like', '%' . $this->search . '%')
        ->get();
        
        return view('livewire.reservas-admin',  compact('reservas'));
    }

    public function getImage($id){
        return User::find($id)->profile_photo_url;
    }
    public function openModal($userId, $id, $fistDate, $lastDate){
        $this->userId = $userId;
        $this->id = $id;
        $this->fistDate = $fistDate;
        $this->lastDate = $lastDate;
        $this->showModal = true;
    }

    public function closeModal(){
        $this->showModal = false;
    }
    public function delete(){
        DB::table('users_cars')
        ->where('user_id', $this->userId)
        ->where('car_id', $this->id)
        ->where('fisrtDafte', $this->fistDate)
        ->where('lastDafte', $this->lastDate)
        ->delete();

        $this->showModal = false;
        session()->flash('status', 'Canelado correctamente');
    }
}
