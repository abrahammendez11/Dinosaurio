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


        <title>Liberacion</title>
    </head>
    <body>
        
        <div class="p-4">
        <p><Label>LIBERACION DE SERVICIO SOCIAL</Label></p>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">SEMESTRE</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">NOMBRE DE LA ESCUELA</label>
                <input type="text" class="form-control" id="escuela" value="{{ auth()->user()->escuela }}" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">TOTAL DE HORAS</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado}}" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">AREA DE ADSCRIPCION</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">NOMBRE DEL PROYECTO</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">NOMBRE DEL PROYECTO</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
            </div>
            
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">DIA DE INICIO</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
            </div>
            
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">DIA DE FIN</label>
                <input type="text" class="form-control" id="grado" value="{{ auth()->user()->grado }}" required>
            </div>

        </form>
        </div>    
    </body>
    </html>
</x-app-layout>