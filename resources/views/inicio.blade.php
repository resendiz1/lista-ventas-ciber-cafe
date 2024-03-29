

@extends('plantilla')


@section('contenido')





  <div class="container-fluid">
    <div class="row p-5 mt-5 d-flex justify-content-center flex-wrap">
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header text-center mb-3 m-0 h2 bg-primary text-white">
          CALENDARIO DE ACTIVIDADES REALIZADAS
        </div>
        <div class="row p-3 d-flex justify-content-around">


          @forelse ($ventas as $ventasItem)
          <div class="col-3 p-2 mx-1 mb-3 mt-3 card">
            <a href="{{route('venta.show', $ventasItem->fecha)}}" class="text-dark">
            <div class="card-header text-white text-center bg-success mb-3 h2">
              <small>Mes: </small> {{ substr($ventasItem->fecha, 3, -5) }}</div>
            <div class="card-body">
              <h1 class="text-center font-weight-bold h1 ">
                <small>Dia: </small> {{ substr($ventasItem->fecha , 0, -8) }}
              </h1>
              <hr>
            </div>
            <div class="card-footer h2 text-center p-2 bg-success text-white">
              <small>Año: </small> {{substr($ventasItem->fecha, 6, 4)}}              
            </div>
          </a> 
          </div>
          @empty
              <li class="font-weight-bold h3">No hay datos </li>
          @endforelse


        </div>
      </div>
    </div>
  </div>
@endsection