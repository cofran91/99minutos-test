<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'latitude',
        'longitude',
        'city',
        'road_type',
        'road_name',
        'road_identifier',
        'second_way_number',
        'second_way_identifier',
        'House_number',
        'house_number_identifier',
        'comments',
        'created_at',
        'updated_at',
    ];

    public function originOrder()
    {
        return $this->hasOne( Order::class, 'origin_address_id', 'id' );
    }

    public function arrivalOrder()
    {
        return $this->hasOne( Order::class, 'arrival_address_id', 'id' );
    }
}
