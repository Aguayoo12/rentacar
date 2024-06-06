<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Attributes\On;
use Livewire\Component;

class ImageModal extends Component
{
    public $isOpen = false;
    public $images = [];
    public function render()
    {
        return view('livewire.image-modal');
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    #[On('showImageModal')]
    public function openModal($carId = null)
    {
        $this->isOpen = true;
        $this->images = Image::where('car_id', $carId)->get();
    }
}
