
        <div class="container pt-5" id="tabla">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Orden descendente por fecha <button class="btn btn-warning btn-sm" id="Refresh" onclick="window.location.reload()">refrescar tabla</button></th>
                  </tr>
                  <tr>
                    <form action="{{route('verIndicador')}}" method="get" id="search">
                      @csrf
                      <div class="mb-3 col-6">
                        <label for="origenIndicador" class="form-label">Buscar indicador</label>
                        <input type="text" class="form-control" id="origenIndicador" name="id" value=" " placeholder="Buscador por id ..." >
                      </div>
                    </form>  
                    @if (!empty($buscador))
                    <tr class="bg-secondary text-white">
                      <th scope="col">#id</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Codigo</th>
                      <th scope="col">Unidad de medida</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Tiempo</th>
                      <th scope="col">Origen</th>
                      <th scope="col"></th>
                    </tr>
                    <tr class="bg-secondary text-white">
                        <th scope="row">{{$buscador->id}}</th>
                        <td>{{$buscador->nombreIndicador}}</td>
                        <td>{{$buscador->codigoIndicador}}</td>
                        <td>{{$buscador->unidadMedidaIndicador}}</td>
                        <td>{{$buscador->valorIndicador}}</td>
                        <td>{{$buscador->fechaIndicador}}</td>
                        <td>{{$buscador->tiempoIndicador}}</td>
                        <td>{{$buscador->origenIndicador}}</td>
                        <td>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{$buscador->id}}">Editar</button>
  
                            <form action="{{route('eliminarIndicador')}}" method="post" id="eliminar">
                                @csrf
                                <input type="hidden" name="id" value="{{$buscador->id}}">
                                <button type="submit" class="btn btn-danger btn-sm">eliminar</button>
                            </form> 
                        </td>
                      </tr>
  
  
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{$buscador->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar {{$buscador->id}}</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('editarIndicador')}}" method="POST" id="editar" name="editar">
                                @csrf
                                <div class="row">
                                      <input type="hidden" id="id" name="id" value="{{$buscador->id}}">        
                                    <div class="mb-3 col-6">
                                        <label for="nombreIndicador" class="form-label">Nombre Indicador</label>
                                        <input type="text" class="form-control" id="nombreIndicador" name="nombreIndicador" value="{{$buscador->nombreIndicador}}" placeholder="LIBRA DE COBRE ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="codigoIndicador" class="form-label">Codigo indicador</label>
                                        <input type="text" class="form-control" id="codigoIndicador" name="codigoIndicador" value="{{$buscador->codigoIndicador}}" placeholder="LIBRA_COBRE ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="unidadMedidaIndicador" class="form-label">Unidad Medida Indicador</label>
                                        <input type="text" class="form-control" id="unidadMedidaIndicador" name="unidadMedidaIndicador" value="{{$buscador->unidadMedidaIndicador}}" placeholder="Dólar ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="valorIndicador" class="form-label">Valor Indicador</label>
                                        <input type="text" class="form-control" id="valorIndicador" name="valorIndicador" value="{{$buscador->valorIndicador}}" placeholder="3.56 ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="fechaIndicador" class="form-label">Fecha Indicador</label>
                                        <input type="date" class="form-control" id="fechaIndicador" name="fechaIndicador" value="{{$buscador->fechaIndicador}}" required>
                                    </div> 
                                    <div class="mb-3 col-6">
                                        <label for="tiempoIndicador" class="form-label">Tiempo indicador</label>
                                        <input type="text" class="form-control" id="tiempoIndicador" name="tiempoIndicador" value="{{$buscador->tiempoIndicador}}" placeholder=" ">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="origenIndicador" class="form-label">Origen indicador</label>
                                        <input type="text" class="form-control" id="origenIndicador" name="origenIndicador" value="{{$buscador->origenIndicador}}" placeholder="mindicador.cl ..." >
                                    </div>
                                </div>
                                
                                <button  type="submit" class="btn btn-primary">Modificar</button> <button  type="reset" class="btn btn-danger ms-5">Limpiar</button> 
                                {{-- <button class="btn btn-primary">Guardar</button> --}}
                            </form>
                            </div>         
                          </div>
                        </div>
                      </div>
                      <!-- FIN MODAL -->
                    
                    @endif                  
                  </tr>
                 
                  <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tiempo</th>
                    <th scope="col">Origen</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <div>
                    {{ $indicadores->links() }}
                  </div>
                    @foreach ($indicadores as $indicador )
                    <tr>
                        <th scope="row">{{$indicador->id}}</th>
                        <td>{{$indicador->nombreIndicador}}</td>
                        <td>{{$indicador->codigoIndicador}}</td>
                        <td>{{$indicador->unidadMedidaIndicador}}</td>
                        <td>{{$indicador->valorIndicador}}</td>
                        <td>{{$indicador->fechaIndicador}}</td>
                        <td>{{$indicador->tiempoIndicador}}</td>
                        <td>{{$indicador->origenIndicador}}</td>
                        <td>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{$indicador->id}}">Editar</button>

                            <form action="{{route('eliminarIndicador')}}" method="post" id="eliminar">
                                @csrf
                                <input type="hidden" name="id" value="{{$indicador->id}}">
                                <button type="submit" class="btn btn-danger btn-sm">eliminar</button>
                            </form> 
                        </td>
                      </tr>


                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{$indicador->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar {{$indicador->id}}</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('editarIndicador')}}" method="POST" id="editar" name="editar">
                                @csrf
                                <div class="row">
                                      <input type="hidden" id="id" name="id" value="{{$indicador->id}}">        
                                    <div class="mb-3 col-6">
                                        <label for="nombreIndicador" class="form-label">Nombre Indicador</label>
                                        <input type="text" class="form-control" id="nombreIndicador" name="nombreIndicador" value="{{$indicador->nombreIndicador}}" placeholder="LIBRA DE COBRE ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="codigoIndicador" class="form-label">Codigo indicador</label>
                                        <input type="text" class="form-control" id="codigoIndicador" name="codigoIndicador" value="{{$indicador->codigoIndicador}}" placeholder="LIBRA_COBRE ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="unidadMedidaIndicador" class="form-label">Unidad Medida Indicador</label>
                                        <input type="text" class="form-control" id="unidadMedidaIndicador" name="unidadMedidaIndicador" value="{{$indicador->unidadMedidaIndicador}}" placeholder="Dólar ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="valorIndicador" class="form-label">Valor Indicador</label>
                                        <input type="text" class="form-control" id="valorIndicador" name="valorIndicador" value="{{$indicador->valorIndicador}}" placeholder="3.56 ..." >
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="fechaIndicador" class="form-label">Fecha Indicador</label>
                                        <input type="date" class="form-control" id="fechaIndicador" name="fechaIndicador" value="{{$indicador->fechaIndicador}}" required>
                                    </div> 
                                    <div class="mb-3 col-6">
                                        <label for="tiempoIndicador" class="form-label">Tiempo indicador</label>
                                        <input type="text" class="form-control" id="tiempoIndicador" name="tiempoIndicador" value="{{$indicador->tiempoIndicador}}" placeholder=" ">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="origenIndicador" class="form-label">Origen indicador</label>
                                        <input type="text" class="form-control" id="origenIndicador" name="origenIndicador" value="{{$indicador->origenIndicador}}" placeholder="mindicador.cl ..." >
                                    </div>
                                </div>
                                
                                <button  type="submit" class="btn btn-primary">Modificar</button> <button  type="reset" class="btn btn-danger ms-5">Limpiar</button> 
                                {{-- <button class="btn btn-primary">Guardar</button> --}}
                            </form>
                            </div>         
                          </div>
                        </div>
                      </div>
                      <!-- FIN MODAL -->

                    @endforeach
                   
                </tbody>
              </table>

        </div>
 
        

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="{{asset('/vendor/jquery-ui/jquery-ui.min.css')}}">
    @stop
    
    @section('js')
        <script src="{{asset('/vendor/jquery-ui/jquery.min.js')}}"></script>
        <script src="{{asset('/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
            <script>
                $('#search').autocomplete({
                    source: function(request, response){
                        $.ajax({
                            url:"{{route('verIndicador')}}",
                            dataType: 'json',
                            data:{
                                term: request.term
                            },
                            success: function(data){
                                response(data)
                            }
                        })
                    }
                });
            </script>
        <script> console.log('Hi!'); </script>
    @stop
