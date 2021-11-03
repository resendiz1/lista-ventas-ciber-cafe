@extends('plantilla')

@section('contenido')
<div class="container-fluid">
    <div class="row p-5 mt-5 d-flex justify-content-center flex-wrap">

     
 
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header bg-primary text-white text-center mb-3 h2">Extras del dia: <small> {{$fecha}}</small></div>
        <div class="row p-3 d-flex justify-content-around">

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col" >#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Área donde se realizo</th>
                <th scope="col">Evidencia</th>
                <th scope="col">Horas</th>
                <th scope="col">Borrar</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>



              @forelse ($ventas as $ventasItem)
              
              <tr>
                <th scope="row" style="vertical-align: middle">{{ $ventasItem->id }}</th>
                <td style="vertical-align: middle">{{$ventasItem->descripcion}}</td>
                <td style="vertical-align: middle">{{$ventasItem->precio}}</td>
                
                <td style="vertical-align: middle">
                  <img src="{{asset(Storage::url($ventasItem->foto1))}}" data-toggle="modal" data-target="#f{{$ventasItem->id}}" style="width: 200px; cursor: pointer;">
                </td>
                
                <td style="vertical-align: middle" class="text-white"> 
                  <i class="fa fa-clock mr-2 bg-primary p-4" style="vertical-align: middle">
                  {{substr($ventasItem->created_at, -8)}}
                  </i> 
                </td>

                <td style="vertical-align: middle">  
                <form action="{{route('actividad.destroy', $ventasItem->id)}}" method="POST" >
                  @csrf @method('DELETE')
                  <button class="btn btn-danger p-2 rounded-pill">
                    <i class="fa fa-eraser fa-2x"  title="Borrar"></i>
                  </button>
                </form>

                </td>

                <td style="vertical-align: middle">
                  <a href="#" class="btn btn-warning rounded-pill p-2">
                    <i class="fa fa-edit fa-2x "></i>
                  </a>
                </td>  
              </tr>
     

              
            <div class="modal fade" id="f{{$ventasItem->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body mx-3">
                      <img src="{{asset(Storage::url($ventasItem->foto1))}}" class="img-fluid" alt="">                    
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