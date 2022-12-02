@extends('layouts.main');
@section ('content')

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                ADD NEW DEPARTURE
            </div>
            <form action="{{ route('departure.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name Place</label>
                    <input type="text" class="form-control" name="txtDepartPlace">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="txtDepartAddress">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{ route('departure.index') }}" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection