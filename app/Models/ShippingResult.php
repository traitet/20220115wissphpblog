<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingResult extends Model
{
    protected $fillable = [
        'shipping_id',
        'shipping_name',
        'shipping_description',
        'shipping_status',
        'shipping_created_at',
        'shipping_updated_at',
    ];
    public $incrementing = false;
}
