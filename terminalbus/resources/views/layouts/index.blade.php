@extends('layouts.main');
@section('content')

<div class="container-md ">
 <div class="col-12">
    <div class="card">
        <div class="card-header bg-info">
        AVAILABLE TRAVELS 
        </div>
        <div class="p-4">
        <div class="card-header">
            <a href="{{ route('travel.create') }}" class="btn btn-info">Add new travel</a>
        </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th># Bus</th>
                    <th>Journey</th>
                    <th>Schedule</th>
                    <th>Type of Travel</th>
                    <th>Fare</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($travel as $data)
                  <tr>
                  <td>
                      {{$data->nameBus}}
                    </td> 
                    <td>
                      {{$data->departPlace}} - {{$data->arrivalPlace}}
                    </td>
                    <td>
                      {{$data->timeTravel}}
                    </td>
                    <td>
                      {{$data->typeTravel}}
                    </td>
                    <td>
                      $ {{$data->fareTravel}}
                    </td>
                    <td>
                      <a href="{{ route('travel.edit',$data->id)}}" class="btn btn-info">Edit Travel</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody> 
            </table>
        </div>
    </div>
  </div>
</div> 
<div class="container-md">
 <div class="col-12 mx-auto">
    <div class="card">
        <div class="card-header mx-auto">
            MANAGEMENT
        </div>
        <div class="p4 mx-auto">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th><a href="{{ route('bus.index') }}" class="btn btn-info">BUSES</a></th>
                    <th><a href="{{ route('departure.index') }}" class="btn btn-info">DEPARTURES</a></th>
                    <th><a href="{{ route('arrival.index') }}" class="btn btn-info">ARRIVALS</a></th>
                  </tr>
                </thead>
            </table>
        </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
  </body>
</html>

@endsection