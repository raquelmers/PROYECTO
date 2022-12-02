<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{

    public function index()
    {
        $bus = Bus::All();
        return $bus;
    }

    public function store(Request $request)
    {
        $bus = new Bus();
        $bus->busPlate = $request->busPlate;
        $bus->nameBus = $request->nameBus;
        $bus->seats = $request->seats;

        $bus->save();
    }

    public function show($id)
    {
        $bus = Bus::find($id);
        return $bus;
    }
    public function update(Request $request, $id)
    {
        $bus = Bus::findOrFail($id);
        $bus->busPlate = $request->busPlate;
        $bus->nameBus = $request->nameBus;
        $bus->seats = $request->seats;

        $bus->save();
        return $bus;
    }

    public function destroy($id)
    {
        $bus = Bus::destroy($id);
        return $bus;
    }
}