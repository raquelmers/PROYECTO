<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{

    public function index()
    {
        $travel = Travel::All();
        return $travel;

    }

    public function store(Request $request)
    {
        $travel = new Travel();
        $travel->idBus = $request->idBus;
        $travel->idDeparture = $request->idDeparture;
        $travel->idArrival = $request->idArrival;
        $travel->dateTravel = $request->dateTravel;
        $travel->timeTravel = $request->timeTravel;
        $travel->typeTravel = $request->typeTravel;
        $travel->fareTravel = $request->fareTravel;

        $travel->save();

    }

    public function show($id)
    {
        $travel = Travel::find($id);
        return $travel;
    }


    public function update(Request $request, $id)
    {
        $travel = Travel::findOrFail($id);
        $travel->idBus = $request->idBus;
        $travel->idDeparture = $request->idDeparture;
        $travel->idArrival = $request->idArrival;
        $travel->dateTravel = $request->dateTravel;
        $travel->timeTravel = $request->timeTravel;
        $travel->typeTravel = $request->typeTravel;
        $travel->fareTravel = $request->fareTravel;

        $travel->save();
        return $travel;
    }

    public function destroy($id)
    {
        $travel = Travel::destroy($id);
        return $travel;
    }
}
