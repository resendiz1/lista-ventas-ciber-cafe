@extends('plantilla')


@section('contenido')

<div class="container-fluid">
 

   
    <div class="row p-5 mt-5 d-flex justify-content-end flex-wrap">

        <div class="col-9">
            @if (session('status'))
            <div class="alert alert-success p-3 text-center h3">{{session('status')}}</div>
                @endif
        </div>
    
      
        <div class="col-9 mt-5">
            <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4 btn-block" data-toggle="modal" data-target="#modalLoginForm">
              <h3 class="font-weight-bold">
                <i class="fas fa-plus-circle mx-3 "></i> 
                AGREGAR ACTIVIDAD REALIZADA
              </h3> 
            </a>
            </div>
          
          
          
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">AGREGANDO ACTIVIDAD</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                <form action="{{route('ventas.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                  <div class="md-form mb-5">
                    <i class="fas fa-paper prefix grey-text"></i>
                    <input type="text" name="descripcion" id="defaultForm-email" class="form-control validate" >
                    <label data-error="wrong" data-success="right" for="defaultForm-email">
                      Descripción
                    </label>
                  </div>
          
                  <div class="md-form mb-4">
                    <i class="fas fa-money prefix grey-text"></i>
                    <input type="text" name="area_trabajo" id="defaultForm-pass" class="form-control validate" >
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">
                      Área donde se realizo 
                    </label>
                  </div>
                  
                  <div class="md-form mb-4">
                    <input type="file" name="foto"  >
                  </div>
          
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-default btn-block btn-sm" type="submit">
                    Agregar
                  </button>
                </form>
                </div>
              </div>
            </div>
          </div>
          
          </div>
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header bg-default text-white text-center mb-3 h2">Actividades de hoy: <small> {{now()->isoFormat('LLL')}} </small></div>
        <div class="row p-3 d-flex justify-content-around">

          <table class="table table-striped shadow">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Area donde se realizo</th>
                <th scope="col">Hora</th>
              </tr>
            </thead>
            <tbody>
    
              @forelse ($hoy as $hoyItem)
              <tr>
                <th scope="row">{{$hoyItem->id}}</th>
                <td>{{$hoyItem->descripcion}}</td>
                <td>{{$hoyItem->precio}}</td>
                <td> <span class="badge badge-default p-2"> <i class="fa fa-clock mx-2"></i>  {{substr($hoyItem->created_at, -8, 5)}}</span> </td>
              </tr>  

              @empty
                  <li>No hay nada</li>
              @endforelse
            </tbody>
          </table>

        </div>
      </div>





    </div>
  </div>
    
@endsection