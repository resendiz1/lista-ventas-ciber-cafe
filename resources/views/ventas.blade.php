@extends('plantilla')

@section('contenido')
<div class="container-fluid">
    <div class="row p-5 mt-5 d-flex justify-content-end flex-wrap">

      <div class="col-8 text-left my-2">
        <a href="{{route('inicio')}}" class="btn btn-danger btn-sm"> <i class="fa fa-home"></i> Regresar</a>
      </div>
      
 
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header bg-default text-white text-center mb-3 h2">Extras del dia: <small> {{$fecha}}</small></div>
        <div class="row p-3 d-flex justify-content-around">

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Área donde se realizo</th>
                <th scope="col">Horas</th>
              </tr>
            </thead>
            <tbody>

              @php
                  ($resendiz = 0)
              @endphp

              @forelse ($ventas as $ventasItem)
              
              <tr>
                <th scope="row">{{ $ventasItem->id }}</th>
                <td>{{$ventasItem->descripcion}}</td>
                <td>{{$ventasItem->precio}}</td>
                <td class="badge badge-success"> <i class="fa fa-clock mr-2"></i> {{substr($ventasItem->created_at, -8)}}</td>
              </tr>
              @php
                   $resendiz = $resendiz + intval($ventasItem->precio)
              @endphp
                 
              @empty
                  <li>No hay datos</li>
              @endforelse

            </tbody>
          </table>

        </div>
  
      </div>





    </div>
  </div> 
@endsection