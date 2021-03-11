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
              <a href="" class="btn btn-default btn-rounded mb-4 btn-block" data-toggle="modal" data-target="#modalLoginForm"><h3 class="font-weight-bold"><i class="fas fa-plus-circle mx-3 "></i> AGREGAR TRABAJO EXTRA EXTRA REALIZADO</h3> </a>
            </div>
          
          
          
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">AGREGANDO TRABAJO EXTRA</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                <form action="{{route('ventas.store')}}" method="POST">
                        @csrf
                  <div class="md-form mb-5">
                    <i class="fas fa-paper prefix grey-text"></i>
                    <input type="text" name="descripcion" id="defaultForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Descripción</label>
                  </div>
          
                  <div class="md-form mb-4">
                    <i class="fas fa-money prefix grey-text"></i>
                    <input type="number" name="cantidad" id="defaultForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Cantidad cobrada</label>
                  </div>
          
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-default btn-block btn-sm" type="submit">Agregar</button>
                </form>
                </div>
              </div>
            </div>
          </div>
          
          </div>
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header text-center mb-3 h2">Extras de hoy: <small> {{now()->isoFormat('LL ')}} </small></div>
        <div class="row p-3 d-flex justify-content-around">

          <table class="table table-striped shadow">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descripción</th>
                <th scope="col">Monto</th>
                <th scope="col">Hora</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

        </div>
        <h1 class="text-center">Total: <strong>$ 300.00</strong></h1>
      </div>





    </div>
  </div>
    
@endsection