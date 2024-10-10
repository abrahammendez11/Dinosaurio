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


        <title>Reporte de Actividades</title>
    </head>
    <body>

        <div class="p-4">
            <div class="container mt-5">
            <h2>REPORTE DE ACTIVIDADES</h2>
        
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="name" class="form-label">NOMBRE DEL ALUMNO</label>
                    <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>

                <div class="col-md-6">
                    <label for="escuela" class="form-label">NOMBRE DE LA ESCUELA</label>
                    <input type="text" class="form-control" id="escuela" value="{{ auth()->user()->escuela }}" required>
                </div>

                <div class="col-md-6">
                    <label for="carrera" class="form-label">CARRERA</label>
                    <input type="text" class="form-control" id="carrera" value="{{ auth()->user()->carrera }}" required>
                </div>

                <div class="col-md-6">
                    <label for="grado" class="form-label">GRADO</label>
                    <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
                </div>

                <div class="col-md-6">
                    <label for="nombreDependencia" class="form-label">DEPENDENCIA</label>
                    <input type="text" class="form-control" id="nombreDependencia" value="{{-- {{ auth()->user()->name }} --}}" required>
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">AREA DE ADSCRIPCION</label>
                    <input type="text" class="form-control" id="name" value="{{-- {{ auth()->user()->name }} --}}" required>
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">NOMBRE DEL PROGRAMA</label>
                    <input type="text" class="form-control" id="name" value="{{-- {{ auth()->user()->name }} --}}" required>
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">NUMERO DE HORAS CUBIERTAS</label>
                    <input type="text" class="form-control" id="name" value="{{-- {{ auth()->user()->name }} --}}" required>
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">NUMERO DE PERSONAS BENEFICIADAS</label>
                    <input type="text" class="form-control" id="name" value="{{-- {{ auth()->user()->name }} --}}" required>
                </div>

                <div class="input-group p-3">
                    <span class="input-group-text">Actividades Realizadas</span>
                    <textarea class="form-control" placeholder="Describir de Manera Cuantitativa las Actividades en el Servicio" aria-label=" Activities "></textarea>
                </div>


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="Repoact" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="text" name="nombre" placeholder="ingresa el nombre: ">
                                <input type="file" name="imagen">
                                <button style="background-color: #b347f1; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px;" type="submit">GUARDAR</button>
                            </form>    
                        </div>
                    </div>  
                </div>


            </form>
            </div>
        
    </body>
    </html>
</x-app-layout>