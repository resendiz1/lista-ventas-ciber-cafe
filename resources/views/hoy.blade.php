@extends('plantilla')


@section('contenido')

<div class="container-fluid">
 


  <div class="row justify-content-start">
    <div class="col-4 mt-5 ml-5 p-0">
      <div class="text-center">
      <a href="" class="btn btn-primary btn-sm p-2 mb-4 rounded-pill" data-toggle="modal" data-target="#modalLoginForm">

          <i class="fas fa-plus-circle mx-1 "></i> 
         Actividad
  
      </a>
      </div>
        
  </div> 
  </div>
   
    <div class="row p-5  d-flex justify-content-center flex-wrap">
      @if (session('status'))
            <div class="col-9">
              <div class="alert alert-success p-3 text-center h3">{{session('status')}}</div>
            </div>
      @endif
       
  
          
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
                    <input type="file" name="foto" id="imagen"  >
                  </div>
                  <div id="previa" class="md-form mb-4">

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
     
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header bg-primary text-white text-center mb-3 h2">Actividades de hoy: <small> {{now()->isoFormat('LLL')}} </small></div>
        <div class="row p-3 d-flex justify-content-around">

          <table class="table table-striped shadow text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Area donde se realizo</th>
                <th scope="col">Foto de evidencia</th>
                <th scope="col">Hora</th>
              </tr>
            </thead>
            <tbody>
    
              @forelse ($hoy as $hoyItem)
              <tr>
                <th scope="row" style="vertical-align: middle" class="h6">{{$hoyItem->id}}</th>
                <td style="vertical-align: middle">{{$hoyItem->descripcion}}</td>
                <td style="vertical-align: middle">{{$hoyItem->precio}}</td>
                <td style="vertical-align: middle">
                  <img src="{{asset(Storage::url($hoyItem->foto1))}}" data-toggle="modal" data-target="#f{{$hoyItem->id}}" style="width: 200px; cursor: pointer;">
                </td>

                <td style="vertical-align: middle" class="h5 text-center">
                <div class="row justify-content-center">
                  <div class="col-8 bg-white p-3 rounded-pill">
                    <i class="fa fa-clock mx-2"></i>  <br>
                      {{substr($hoyItem->created_at, -8, 5)}}
                  </div>
                </div>
                </td>          
              </tr> 
              
              
              <div class="modal fade" id="f{{$hoyItem->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body mx-3">
                        <img src="{{asset(Storage::url($hoyItem->foto1))}}" class="img-fluid" alt="">                    
                    </div>
                  </div>
                </div>
              </div>
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