@extends('layouts.main');
@section ('content')

<div class="container-sm">
    <div class="col-6 sm-3">
        <div class="card">
            <div class="card-header bg-info">
                EDIT ARRIVAL
            </div>
            <form action="{{ route('arrival.update', $arrival->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="txtArrivalPlace" value="{{$arrival->arrivalPlace}}">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Address</label>
                    <input type="text" class="form-control" name="txtArrivalAddress" value="{{$arrival->arrivalAddress}}">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{ route('arrival.index') }}" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection