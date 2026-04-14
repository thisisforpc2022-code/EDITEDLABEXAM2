<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Rice;
use App\Models\Payment;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'rice_id',
        'quantity',
        'total'
    ];

    public function rice()
    {
        return $this->belongsTo(Rice::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}