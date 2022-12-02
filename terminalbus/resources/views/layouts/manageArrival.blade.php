@extends('layouts.main');
@section ('content')
<div class="container-md">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
            MANAGE ARRIVALS
        </div>
        <div class="p-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Arrival Place</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($arrival as $data)
                  <tr>
                  <td>
                      {{$data->arrivalPlace}}
                    </td> 
                    <td>
                      {{$data->arrivalAddress}}
                    </td>
                    <td>
                    
                    <a href="{{ route('arrival.edit',$data->id)}}" class="btn btn-info">Edit</a>
                    </td>
                  @endforeach
                </tbody> 
            </table>
            <a href="{{ route('arrival.create') }}" class="btn btn-info">Add new arrival</a>
            <a href="{{ route('travel.index') }}" class="btn btn-info">Return</a>
        </div>
    </div>
  </div>
</div>  
@endsection