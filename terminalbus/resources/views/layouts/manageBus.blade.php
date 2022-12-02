@extends('layouts.main');
@section ('content')
<div class="container-md">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
            MANAGE BUSES
        </div>
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Bus Plate</th>
                    <th>Name Bus</th>
                    <th>Number of Seats</th>
                    <th>Bus Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bus as $data)
                  <tr>
                  <td>
                      {{$data->busPlate}}
                    </td> 
                    <td>
                      {{$data->nameBus}}
                    </td>
                    <td>
                      {{$data->seats}}
                    </td>
                    <td>
                      {{$data->busStatus}}
                    </td>
                    <td>
                      <a href="{{ route('bus.edit',$data->id)}}" class="btn btn-info">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody> 
            </table>
            <a href="{{ route('bus.create') }}" class="btn btn-info">Add new bus</a>
            <a href="{{ route('travel.index') }}" class="btn btn-info">Return</a>
        </div>
    </div>
  </div>
</div>  
@endsection