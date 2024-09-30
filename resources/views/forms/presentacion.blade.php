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


        <title>Carta de Presentacion/Aceptacion</title>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Formulario de Servicio Social</h2>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre del Alumno</span>
        <input type="text" class="form-control" placeholder="Alumno" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Grado o Curso</span>
        <input type="text" class="form-control" placeholder="Curso" aria-label="Grade" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre de la Escuela</span>
        <input type="text" class="form-control" placeholder="Escuela" aria-label="School" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Direccion de la Escuela</span>
        <input type="text" class="form-control" placeholder="DireccionE" aria-label="Address" aria-describedby="basic-addon1">
      </div>

       <div class="p-4">
        <p>DATOS DE LA DEPENDENCIA</p>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">DEPENDENCIA</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">AREA ESPECIFICA</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">DIRECCION DE LA DEPENDENCIA</label>
                <input type="text" class="form-control" id="validationCustom03" value="" required>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">TELEFONO</label>
                <input type="text" class="form-control" id="validationCustom04" value="" required>
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
                <label for="validationCustom02" class="form-label">DIAS DE PRESTACION</label>
                <input type="text" class="form-control" id="validationCustom07" value="LUNES A VIERNES" required>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">CORREO ELECTRONICO</label>
                <input type="text" class="form-control" id="validationCustom08" value="" required>
              </div>
              <div class="col-md-5 ">
                <label for="validationCustom02" class="form-label">PROGRAMA</label>
                <input type="text" class="form-control" id="validationCustom009" value="" required>
              </div>
              <div class="col-md-3 ">
                <label for="validationCustom02" class="form-label">FECHA DE INICIO</label>
                <input type="text" class="form-control" id="validationCustom10" value="" required>
              </div>
              <div class="col-md-4 ">
                <label for="validationCustom02" class="form-label">FECHA DE CONCLUSION</label>
                <input type="text" class="form-control" id="validationCustom011" value="" required>
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