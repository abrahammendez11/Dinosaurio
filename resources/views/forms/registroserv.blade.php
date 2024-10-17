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
            <div class="container mt-5 border-spacing: 10px">
            <h2>REGISTRO A DEPENDENCIAS DE SERVICIO SOCIAL</h2>
    
            <form class="row g-3 needs-validation" novalidate>

              <diV class="container-lg border-spacing-8">
              <div class="col-md-6">
                <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO  {{auth()->user()->name }}</strong></label>
                <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
              </div>
              </diV>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO  {{auth()->user()->name }}</strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO  {{auth()->user()->name }}</strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO  {{auth()->user()->name }}</strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>

                <div class="col-md-6">
                  <label for="name" class="form-label"><strong>NOMBRE DEL ALUMNO  {{auth()->user()->name }}</strong></label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>
              </diV>  

            </form>
            </div>
    </body>
    </html>
</x-app-layout>
