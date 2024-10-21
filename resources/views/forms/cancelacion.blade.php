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


        <title>Suspencion y Cancelacion</title>
    </head>
    <body>
      
        <div class="p-4">
            <p>SUSPENCION O CANCELACION DE SERVICIO SOCIAL</p>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">NOMBRE</label>
                  <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" required>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">NOMBRE DE LA DEPENDENCIA</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">MOTIVO DE CANCELACION O SUSPENCION</label>
                    <input type="text" class="form-control" id="validationCustom03" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">TELEFONO</label>
                    <input type="text" class="form-control" id="numeroTelefono" value="{{ auth()->user()->numeroTelefono }}" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">JEFE INMEDIATO</label>
                    <input type="text" class="form-control" id="validationCustom05" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">CARGO JEFE INMEDIATO</label>
                    <input type="text" class="form-control" id="validationCustom06" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">PROGRAMA</label>
                    <input type="text" class="form-control" id="validationCustom07" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">FECHA DE SUSPENCION O CANCELACION</label>
                    <input type="text" class="form-control" id="$now" value="$now" required>
                  </div>
                
                <form action="{{url('view/docs/repopresent.php')}}" method="GET">  
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Exportar Documento</button>
                </div>
                </form>
              </form>
           </div> 

    </body>
    </html>
</x-app-layout>