<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bus;
use App\Models\Departure;
use App\Models\Arrival;

class Travel extends Model
{
    use HasFactory;
    protected $table = 'travel';
    protected $fillable = [
        'typeTravel',
        'dateTravel',
        'timeTravel',
        'fareTravel',
        'idDeparture',
        'idArrival',
        'idBus'
    ];

    protected $with = ['bus','departure','arrival'];
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'idBus', 'id' );
    }

    public function departure()
    {
        return $this->belongsTo(Departure::class, 'idDeparture', 'id' );
    }

    public function arrival()
    {
        return $this->belongsTo(Arrival::class, 'idArrival', 'id' );
    }

}
