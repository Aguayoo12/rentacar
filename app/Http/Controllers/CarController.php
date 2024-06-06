<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $initDate = session('initDate');
        $endDate = session('endDate');
        $city = session('city');
        $people = session('people');

        $reservedCarIds = DB::table('users_cars')
        ->whereRaw('fisrtDafte <= ? AND lastDafte >= ?', [$endDate, $initDate])
        ->pluck('car_id')
        ->toArray();

        $availableCars = Car::whereNotIn('id', $reservedCarIds)->get();
        return view('cars.allcars', ['cars' => $availableCars, 'initDate' => $initDate, 'endDate' => $endDate, 'city' => $city, 'people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $initDate = session('initDate');
        $endDate = session('endDate');
        $car = Car::find($id);
        return view('cars.viewcar', ['car' => $car, 'initDate' => $initDate, 'endDate' => $endDate]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
