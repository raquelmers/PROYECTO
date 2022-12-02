@extends('layouts.main');
@section ('content')
<div class="container-md">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
            MANAGE DEPARTURES
        </div>
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Departure Place</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($departure as $data)
                  <tr>
                  <td>
                      {{$data->departPlace}}
                    </td> 
                    <td>
                      {{$data->departAddress}}
                    </td>
                    <td>
                    <a href="{{ route('departure.edit',$data->id)}}" class="btn btn-info">Edit</a>
                    </td>
                  @endforeach
                </tbody> 
            </table>
            <a href="{{ route('departure.create') }}" class="btn btn-info">Add new departure</a>
            <a href="{{ route('travel.index') }}" class="btn btn-info">Return</a>
        </div>
    </div>
  </div>
</div>  
@endsection