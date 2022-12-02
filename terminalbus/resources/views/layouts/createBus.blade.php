@extends('layouts.main');
@section ('content')

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                ADD NEW BUS
            </div>
            <form action="{{ route('bus.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Bus Plate</label>
                    <input type="text" class="form-control" name="txtBusPlate">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name Bus</label>
                    <input type="text" class="form-control" name="txtNameBus">
                </div>
                <div class="mb-3">
                    <label class="form-label">Number of Seats</label>
                    <input type="text" class="form-control" name="txtNunSeats">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bus Status</label>
                    <input type="text" class="form-control" name="txtBusStatus">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{ route('bus.index') }}" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection