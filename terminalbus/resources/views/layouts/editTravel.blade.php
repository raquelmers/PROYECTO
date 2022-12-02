@extends('layouts.main');
@section ('content')

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                EDIT TRAVEL
            </div>
            <form action="{{ route('travel.update', $travel->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">No. Bus</label>
                    <select name="slctNameBus" class="form control input-sm">
                        @foreach($busList as $item)
                        <option value="{{$item->id}}">{{$item->nameBus}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure Name</label>
                    <select name="slctDepartPlace" class="form control input-sm">
                        @foreach($departureList as $item)
                        <option value="{{$item->id}}">{{$item->departPlace}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Arrival Name</label>
                    <select name="slctArrivalPlace" class="form control input-sm">
                        @foreach($arrivalList as $item)
                        <option id="{{$item->id}}" value="{{$item->id}}">{{$item->arrivalPlace}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="txtDateTravel" value="{{$travel->dateTravel}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Time</label>
                    <input type="time" class="form-control" name="txtTimeTravel" value="{{$travel->timeTravel}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Type of travel</label>
                    <input type="text" class="form-control" name="txtTypeTravel" value="{{$travel->typeTravel}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fare</label>
                    <input type="text" class="form-control" name="txtFareTravel" value="{{$travel->fareTravel}}">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{ route('travel.index') }}" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection