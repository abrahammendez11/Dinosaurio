<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


        <title>Registro de Servicio Social</title>

    </head>
    <body>
        <div class="p-4">
            <div class="container mt-5 border-spacing: 10px 15px">
            <h2>REGISTRO A DEPENDENCIAS DE SERVICIO SOCIAL</h2>
    
            <form class="row g-3 needs-validation" novalidate>

              {{-- <diV class="container-lg border-spacing-8 15px">
              <div class="col-md-6 mb-3">
                <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO  {{auth()->user()->name }}</strong></label>
                <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
              </div>
              </diV> --}}

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO </strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required readonly>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>CORREO DEL ALUMNO </strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->email }}" required readonly>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NOMBRE DE LA ESCUELA </strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->escuela }}" required readonly>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>CARRERA DEL ALUMNO  </strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->carrera }}" required readonly>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>GRADO DEL ALUMNO  </strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->grado }}" required readonly>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NUMERO DE TELEFONO DEL ALUMNO </strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->numeroTelefono }}" required readonly>
                </div>
               
 

            <!-- Formulario de Registro -->
                <form action="{{ route('registroserv.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <!-- Select para elegir la dependencia -->
                    <div class="form-group col-md-6">
                        <label for="ctcatdependencia_id"><strong>NOMBRE DE LA DEPENDENCIA</strong></label>
                        <select name="ctcatdependencia_id" id="ctcatdependencia_id" class="form-control" required onchange="fetchDependenciaInfo()">
                            <option value="">-- Selecciona una Dependencia --</option>
                            @foreach ($dependencias as $dependencia)
                                <option value="{{ $dependencia->id }}">{{ $dependencia->nombreDependencia }}</option> 
                            @endforeach
                        </select>
                        @error('ctcatdependencia_id')
                            <div class="text-danger">{{$message}}</div>
                        @enderror  
                    </div>

                    <!-- Dirección de la Dependencia -->
                <div class="form-group col-md-6">
                  <label for="correoDependencia" class="form-label"><strong>CORREO DE LA DEPENDENCIA</strong></label>
                  <input type="text" class="form-control" id="correoDependencia" name="correoElectronico"
                        value="{{ $dependencia->correoElectronico ?? '' }}" readonly>
                </div>

                <div class="col-md-6">
                  <label for="telefonoDependencia" class="form-label"><strong>TELEFONO DE LA DEPENDENCIA </strong></label>
                  <input type="text" class="form-control" id="telefonoDependencia" name="telefonoDependencia"
                          value="{{$dependencia->numTelefono ?? ''}}" readonly>
                </div>

                <script>
                  function fetchDependenciaInfo()
                  {

                    //obtener el valor seleciconado del select
                    const dependenciaId= document.getElementById('ctcatdependencia_id').value;

                    //verificar que se haya seleccionado  una dependencia
                    if(dependenciaId)
                    {
                      //realizar la solicitud en AJAX a la ruta de laravel
                      fetch('/dependencia/${dependenciaId}')
                        .then(response => response.json())
                        .then(data =>
                          {
                            //actualizar los campos de correo y telefono con los datos obtenidos
                            document.getElementById('correoElectronico').value = data.correoElectronico || '';
                            document.getElementById('telefonoDependencia').value = data.numTelefono || '';
                          }
                        )
                        .catch(error => console.error('');
                        )
                    }
                  }
                </script>  

                <div class="form-group col-md-6">
                  <label for="areaAdscripcion" class="form-label"><strong> AREA ADSCRIPCION </strong></label>
                  <input type="text" class="form-control" id="areaAdscripcion" name="areaAdscripcion" placeholder="(Area a la que ingresaste)" >
                </div>

                <div class="form-group col-md-6">
                  <label for="nombreFejeInmediato" class="form-label"><strong> NOMBRE JEFE INMEDIATO </strong></label>
                  <input type="text" class="form-control" id="nombreJefeInmediato" name="nombreJefeInmediato" placeholder="Nombre de tu jefe inmediato">
                </div>

                <div class="form-group col-md-6">
                  <label for="cargoJefeInmediato" class="form-label"><strong> CARGO JEFE INMEDIATO </strong></label>
                  <input type="text" class="form-control" id="cargoJefeInmediato" name="cargoJefeInmediato" placeholder="Cargo de tu jefe inmediato" >
                </div>

                <div class="form-group col-md-6 c-azul">
                  <label for="fechaInicio"><strong> FECHA DE INICIO </strong><small></small></label>
                  <input type="date" id="fechaInicio"  name="fechaInicio"  class="sm-form-control">
                </div>

                <div class="form-group col-md-6 c-azul">
                  <label for="fechaFin"><strong> FECHA DE FIN </strong><small></small></label>
                  <input type="date" id="fechaFin"  name="fechaFin"  class="sm-form-control">
                </div>

                
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>  
                  </form>  
            </div>



        </div>
    </body>
    </html>
</x-app-layout>
