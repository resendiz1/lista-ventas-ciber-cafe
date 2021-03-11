@extends('plantilla')

@section('contenido')
<div class="container-fluid">
    <div class="row p-5 mt-5 d-flex justify-content-end flex-wrap">

      
 
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header text-center mb-3 h2">Extras del dia: <small> 28 de Diciembre del 2020 </small></div>
        <div class="row p-3 d-flex justify-content-around">

          <table class="table table-striped">
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