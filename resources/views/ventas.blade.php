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
                <th scope="col" >#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Área donde se realizo</th>
                <th scope="col">Evidencia</th>
                <th scope="col">Horas</th>
              </tr>
            </thead>
            <tbody>



              @forelse ($ventas as $ventasItem)
              
              <tr>
                <th scope="row" style="vertical-align: middle">{{ $ventasItem->id }}</th>
                <td style="vertical-align: middle">{{$ventasItem->descripcion}}</td>
                <td style="vertical-align: middle">{{$ventasItem->precio}}</td>
                <td style="vertical-align: middle">
                  <img src="{{Storage::url($ventasItem->foto1)}}" data-toggle="modal" data-target="#f{{$ventasItem->id}}" style="width: 200px; cursor: pointer;">
                </td>
                <td style="vertical-align: middle" class="text-white"> 
                  <i class="fa fa-clock mr-2 bg-primary p-4" style="vertical-align: middle">
                  {{substr($ventasItem->created_at, -8)}}
                </i> 
                </td>
              </tr>
     

              
            <div class="modal fade" id="f{{$ventasItem->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body mx-3">
                      <img src="{{Storage::url($ventasItem->foto1)}}" class="img-fluid" alt="">                    
                  </div>
                </div>
              </div>
            </div>

         


                 
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