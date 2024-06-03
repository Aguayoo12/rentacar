<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class BrandModal extends Component
{
    use WithFileUploads;

    public $isOpen = false;
    public $brandId;

    public $brand;
    public $name;
    public $image;
    public $imagePreview;

    protected $rules = [
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|max:1024', // Ajusta según tus necesidades
    ];

    #[On('editBrand')] 
    public function openModal($brandId = null)
    {
        $this->isOpen = true;
        if ($brandId) {
            $brand = Brand::findOrFail($brandId);
            $this->brand = $brand;
            $this->brandId = $brand->id;
            $this->name = $brand->name;
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
        $this->reset(['brandId', 'name', 'image', 'imagePreview', 'brand']);
    }

    public function updatedImage()
    {
        $this->imagePreview = $this->image->temporaryUrl();
    }

    public function save()
    {
        $this->validate();

        if ($this->brandId) {
            $brand = Brand::findOrFail($this->brandId);
            $brand->name = $this->name;
            if ($this->image) {
                $brand->logo = $this->image->store('brands', 'public');
            }
            $brand->save();
        } else {
            Brand::create([
                'name' => $this->name,
                'logo' => $this->image ? $this->image->store('brands', 'public') : null,
            ]);
        }

        $this->closeModal();
        $this->dispatch('brandUpdated');
    }

    public function render()
    {
        return view('livewire.brand-modal');
    }
}
