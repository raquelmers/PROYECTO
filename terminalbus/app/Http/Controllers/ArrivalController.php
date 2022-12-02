<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arrival;

class ArrivalController extends Controller
{

    public function index()
    {
        $arrival = Arrival::All();
        return $arrival;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $arrival = new Arrival();
        $arrival->arrivalPlace = $request->arrivalPlace;
        $arrival->arrivalAddress = $request->arrivalAddress;

        $arrival->save();
    }

    public function show($id)
    {
        $arrival = Arrival::find($id);
        return  $arrival;
    }

    public function update(Request $request, $id)
    {
        $arrival = Arrival::findOrFail($id);
        $arrival->arrivalPlace = $request->arrivalPlace;
        $arrival->arrivalAddress = $request->arrivalAddress;

        $arrival->save();
        return $arrival;
    }

    public function destroy($id)
    {
        $arrival = Arrival::destroy($id);
        return $arrival;
    }
}
