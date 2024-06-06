<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CarModal extends Component
{
    use WithFileUploads;

    public $isOpen = false;
    public $carId;

    public $car;
    public $name;
    public $seats;
    public $transmission;
    public $power;
    public $price;
    public $km;
    public $type;
    public $fuel;
    public $city;
    public $description;
    public $brand_id;
    public $image;
    public $imagePreview;
    public $brands;

    protected $rules = [
        'name' => 'required|string|max:255',
        'seats' => 'required|string|max:255',
        'power' => 'required|integer',
        'price' => 'required|numeric',
        'km' => 'required|numeric',
        'city' => 'required|string|max:255',
        'image' => 'nullable|image|max:1024',
    ];

    #[On('editCar')] 
    public function openModal($carId = null)
    {
        $this->isOpen = true;
        $this->brands = Brand::all();
        if ($carId) {
            $car = Car::findOrFail($carId);
            $this->car = $car;
            $this->carId = $car->id;
            $this->name = $car->name;
            $this->seats = $car->seats;
            $this->transmission = $car->transmission;
            $this->power = $car->power;
            $this->price = $car->price;
            $this->km = $car->km;
            $this->type = $car->type;
            $this->fuel = $car->fuel;
            $this->city = $car->city;
            $this->description = $car->description;
            $this->brand_id = $car->brand_id;
        } else {
            $this->resetForm();
        }
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset(['carId', 'name', 'seats', 'transmission', 'power', 'price', 'km', 'type', 'fuel', 'city', 'brand_id', 'image', 'description', 'imagePreview', 'car']);
    }

    public function updatedImage()
    {
        $this->imagePreview = $this->image->temporaryUrl();
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->image ? $this->image->store('cars', 'public') : null;

        if ($this->carId) {
            $car = Car::findOrFail($this->carId);
            $car->update([
                'name' => $this->name,
                'seats' => $this->seats,
                'transmission' => $this->transmission,
                'power' => $this->power,
                'price' => $this->price,
                'km' => $this->km,
                'type' => $this->type,
                'fuel' => $this->fuel,
                'city' => $this->city,
                'brand_id' => $this->brand_id,
                'description' => $this->description,
                'image' => $imagePath ? $imagePath : $car->image,
            ]);
        } else {
            Car::create([
                'name' => $this->name,
                'seats' => $this->seats,
                'transmission' => $this->transmission,
                'power' => $this->power,
                'price' => $this->price,
                'km' => $this->km,
                'type' => $this->type,
                'fuel' => $this->fuel,
                'city' => $this->city,
                'brand_id' => $this->brand_id,
                'description' => $this->description,
                'image' => $imagePath,
            ]);
        }

        $this->closeModal();
        $this->dispatch('updatedCar');
    }

    public function render()
    {
        return view('livewire.car-modal');
    }
}
