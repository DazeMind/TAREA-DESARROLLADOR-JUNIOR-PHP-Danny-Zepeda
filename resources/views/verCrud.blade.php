<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        <div class="container">
            <header class="d-flex justify-content-center py-3">
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link " aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/" class="nav-link active">Crud</a></li>
                <li class="nav-item"><a href="/grafico" class="nav-link">Grafico</a></li>
              </ul>
            </header>
        </div>
        {{-- <div class="container card shadow-sm mt-3 py-3 px-3">
            <form id="buscar">
                <div class="mb-3">
                    <label for="unidadMedidaIndicador" class="form-label">Buscar</label>
                    <input type="text" class="form-control" id="unidadMedidaIndicador" name="unidadMedidaIndicador" value="" placeholder="Dólar ...">
                </div>
            </form>
        </div> --}}


        
        <div class="container card shadow-sm mt-3 py-3 px-3">
            <form action="{{route('crearIndicador')}}" method="POST" id="crear" name="crear">
                @csrf
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="nombreIndicador" class="form-label">Nombre Indicador</label>
                        <input type="text" class="form-control" id="nombreIndicador" name="nombreIndicador" value="" placeholder="LIBRA DE COBRE ..." required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="codigoIndicador" class="form-label">Codigo indicador</label>
                        <input type="text" class="form-control" id="codigoIndicador" name="codigoIndicador" value="" placeholder="LIBRA_COBRE ..." required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="unidadMedidaIndicador" class="form-label">Unidad Medida Indicador</label>
                        <input type="text" class="form-control" id="unidadMedidaIndicador" name="unidadMedidaIndicador" value="" placeholder="Dólar ..." required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="valorIndicador" class="form-label">Valor Indicador</label>
                        <input type="text" class="form-control" id="valorIndicador" name="valorIndicador" value="" placeholder="3.56 ..." required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="fechaIndicador" class="form-label">Fecha Indicador</label>
                        <input type="date" class="form-control" id="fechaIndicador" name="fechaIndicador" value="" required>
                    </div> 
                    <div class="mb-3 col-6">
                        <label for="tiempoIndicador" class="form-label">Tiempo indicador</label>
                        <input type="text" class="form-control" id="tiempoIndicador" name="tiempoIndicador" value="" placeholder=" ">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="origenIndicador" class="form-label">Origen indicador</label>
                        <input type="text" class="form-control" id="origenIndicador" name="origenIndicador" value="" placeholder="mindicador.cl ..." required>
                    </div>
                </div>
                
                <button  type="submit" class="btn btn-success">Crear</button> <button  type="reset" class="btn btn-danger ms-5">Limpiar</button> 
                {{-- <button class="btn btn-primary">Guardar</button> --}}
            </form>
        </div>


        <div id="tabla">
            @include('tabla')
        </div>


        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
   $(document).ready(function(){
       var counter = 9;
   window.setInterval(function(){
    counter = counter - 3;
     if(counter>=0){
       document.getElementById('off').innerHTML=counter;
     }
     if (counter===0){
       counter=9;
     }
     $("#tabla").load(window.location.href + " #tabla" );
   }, 3000);
   });
</script> --}}

    </body>
</html>
<script type="text/javascript">
    $('#crear').submit(function (ev) {
      $.ajax({
        type: $('#crear').attr('method'), 
        url: $('#crear').attr('action'),
        data: $('#crear').serialize(),
        success: function (data) { alert('Datos enviados con exito !!!'); 
                        $('#nombreIndicador').val('');
                        $('#codigoIndicador').val('');
                        $('#unidadMedidaIndicador').val('');
                        $('#valorIndicador').val('');
                        $('#fechaIndicador').val('');
                        $('#tiempoIndicador').val('');
                        $('#origenIndicador').val('');  } 
      });
      ev.preventDefault();
    });
    </script>
<script type="text/javascript">
    $('#eliminar').submit(function (ev) {
      $.ajax({
        type: $('#eliminar').attr('method'), 
        url: $('#eliminar').attr('action'),
        data: $('#eliminar').serialize(),
        success: function (data) { alert('Datos Eliminados con exito !!!'); function recargar(){
            
            
        } } 
      });
      ev.preventDefault();
    });
    </script>
  <script type="text/javascript">
    $('#editar').submit(function (ev) {
      $.ajax({
        type: $('#editar').attr('method'), 
        url: $('#editar').attr('action'),
        data: $('#editar').serialize(),
        success: function (data) { alert('Datos Modificados con exito !!!'); 
       } 
      });
      ev.preventDefault();
    });
    </script>