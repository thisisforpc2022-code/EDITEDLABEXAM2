<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;


class Rice extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'stock', 'description'];
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
