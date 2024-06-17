<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'seats', 'transmission', 'power', 'price', 'km', 'type', 'fuel', 'city', 'image', 'brand_id', 'description'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_cars')->withPivot('firstDate', 'lastDate');
    }
}
