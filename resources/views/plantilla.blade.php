<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Extras</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <style>
    body{
      background-color: cadetblue
    }
  </style>
</head>
<body>

    <div class="row flotante d-flex justify-content-center">
    <div class="col-12 card p-2 text-center mt-2"><a href="{{route('inicio')}}" class="{{request()->routeIs('inicio') ? 'btn-default' : ''}}">Inicio</a></div>
    <div class="col-12 card p-2 text-center mt-2"><a href="{{route('hoy')}}" class="{{request()->routeIs('hoy') ? 'btn-default' : ''}}">Otro menu</a></div>
    <div class="col-12 card p-2 text-center mt-2"><a href="{{route('ventas')}}" class="{{request()->routeIs('ventas') ? 'btn-default' : ''}}">Opcion 3</a> </div>
      </div>
@yield('contenido')



  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <script type="text/javascript"></script>

</body>
</html>