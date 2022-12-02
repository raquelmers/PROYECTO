@extends('layouts.main');
@section ('content')

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                EDIT BUS
        </div>
        <form action="{{ route('bus.update', $bus->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Bus Plate</label>
                    <input type="text" class="form-control" name="txtBusPlate" value="{{$bus->busPlate}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name Bus</label>
                    <input type="text" class="form-control" name="txtNameBus" value="{{$bus->nameBus}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Number of Seats</label>
                    <input type="text" class="form-control" name="txtSeats" value="{{$bus->seats}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bus Status</label>
                    <input type="text" class="form-control" name="txtBusStatus" value="{{$bus->busStatus}}">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{ route('bus.index') }}" class="btn btn-info">Cancel</a>
            </form>
    </div>
</div>
@endsection