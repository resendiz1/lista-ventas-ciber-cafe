@extends('plantilla')


@section('contenido')





  <div class="container-fluid">
    <div class="row p-5 mt-5 d-flex justify-content-end flex-wrap">

      {{-- @forelse ($ventas as $ventasItem)
        {{$ventasItem->created_at->format('d/M/Y')}}
      @empty
          
      @endforelse --}}
      
 
   
      <div class="col-9 card p-2 bg-gray">
        <div class="card-header text-center mb-3 m-0 h2 bg-default text-white">DIAS</div>
        <div class="row p-3 d-flex justify-content-around">


          @forelse ($ventas as $ventasItem)
          <div class="col-3 p-2 mx-1 mb-3 card">
            <a href="" class="text-dark">
            <div class="card-header text-white text-center bg-success mb-3 h2">{{ substr($ventasItem->fecha, 3, -5) }}</div>
            <div class="card-body">
              <h1 class="text-center font-weight-bold h1 ">
                {{ substr($ventasItem->fecha , 0, -8) }}
              </h1>
              <hr>
            </div>
            <div class="card-footer h2 text-center p-2 bg-success text-white">
              {{
              
             substr($ventasItem->fecha, 6, 4)  
              
              }}              
            </div>
          </a>
          </div>
          @empty
              <li class="font-weight-bold h3">No hay datos </li>
          @endforelse


          <div class="col-3 p-3 mx-1 mb-3 card">
            <div class="card-header text-white text-center bg-success mb-3 h2">Junio</div>
            <div class="card-body">
              <h1 class="text-center font-weight-bold h1 ">23</h1>
              <hr>
            </div>
            <div class="card-footer h2 text-center p-2 bg-success text-white">
              2020              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection