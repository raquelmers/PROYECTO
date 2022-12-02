<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departure;

class DepartureController extends Controller
{

    public function index()
    {
        $departure = Departure::All();
        return $departure;
    }

    public function store(Request $request)
    {
        $departure = new Departure();
        $departure->departPlace = $request->departPlace;
        $departure->departAddress = $request->departAddress;

        $departure->save();
    }

    public function show($id)
    {
        $departure = Departure::find($id);
        return $departure;
    }

    public function update(Request $request, $id)
    {
        $departure = Departure::findOrFail($id);
        $departure->departPlace = $request->departPlace;
        $departure->departAddress = $request->departAddress;

        $departure->save();
        return $departure;
    }

    public function destroy($id)
    {
        $departure = Departure::destroy($id);
        return $departure;
    }
}