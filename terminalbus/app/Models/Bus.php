<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'busPlate',
        'nameBus',
        'seats'
    ];

    public function travel()
{
    return $this->hasMany('App\Models\Travel', 'idBus' );
}

}
