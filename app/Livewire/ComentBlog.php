<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class ComentBlog extends Component
{
    use WithFileUploads;
    public $comments;
    public $image;
    public $comment;
    public $rating = 0;
    public $hoverRating = 0;

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function setHoverRating($rating)
    {
        $this->hoverRating = $rating;
    }

    public function resetHoverRating()
    {
        $this->hoverRating = 0;
    }

    public function submit()
    {
        $this->validate([
            'image' => 'image',
            'comment' => 'required',
        ]);

        if ($this->image) {
            $imagePath = $this->image->store('images', 'public');
        }

        Comment::create([
            'image' => $imagePath ?? null,
            'comment' => $this->comment,
            'rating' => $this->rating !== 0 ? $this->rating : null,
            'user_id' => Auth::user()->id,
        ]);
        $this->resetForm();
        $this->comments = Comment::all();

        $this->dispatch('updateBlog');
    }

    public function resetForm()
    {
        $this->image = null;
        $this->comment = null;
        $this->rating = 0;
        $this->hoverRating = 0;
    }
    #[On('updateBlog')]
    public function render()
    {
        return view('livewire.coment-blog');
    }
}
