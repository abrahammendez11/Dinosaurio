<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <style>
            /* Colores personalizados para checkboxes */
            .form-check-input:checked {
                background-color: #198754; /* Verde personalizado */
                border-color: #198754;
            }
        </style>

        <title>Evaluacion de Servicio Social</title>
    </head>
    <body>

        <div class="p-4">
            <p>SUSPENCION O CANCELACION DE SERVICIO SOCIAL</p>
            <form class="row g-3 needs-validation" novalidate action="{{ route('evaluacion.store') }}" method="POST">
                @csrf

                <div class="col-md-6">
                    <label for="nombre" class="form-label">NOMBRE</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" required>
                </div>

                <div class="col-md-6">
                    <label for="programa" class="form-label">PROGRAMA</label>
                    <input type="text" name="programa" class="form-control" id="programa" required>
                </div>

                <div class="col-md-6">
                    <label for="fechaReporte" class="form-label">FECHA QUE SE REPORTA</label>
                    <input type="date" name="fechaReporte" class="form-control" id="fechaReporte" required>
                </div>

                <div class="col-md-6">
                    <label for="nivelAcademico" class="form-label">NIVEL ACADEMICO</label>
                    <input type="text" name="nivelAcademico" class="form-control" id="nivelAcademico" required>
                </div>

                <div class="col-md-6">
                    <label for="institucionEducativa" class="form-label">INSTITUCION EDUCATIVA</label>
                    <input type="text" name="institucionEducativa" class="form-control" id="institucionEducativa" required>
                </div>

                <div class="col-md-6">
                    <label for="telefono" class="form-label">TELEFONO</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" required>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                            <th colspan="5">Nivel de Desempeño</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Criterios a Evaluar</th>
                            <th scope="col">Insuficiente</th>
                            <th scope="col">Suficiente</th>
                            <th scope="col">Bueno</th>
                            <th scope="col">Notable</th>
                            <th scope="col">Excelente</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Aquí se muestran los criterios de evaluación -->
                        <!-- Añade tus filas de criterios aquí -->
                    </tbody>
                </table>

                <div class="input-group">
                    <span class="input-group-text">Observaciones</span>
                    <textarea class="form-control" name="observaciones" aria-label="With textarea"></textarea>
                </div>
            
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Guardar Evaluación</button>
                </div>
            </form>
        </div>

        <script>
            document.querySelector('form').addEventListener('submit', function (event) {
                const criterios = ['criterioUno', 'criterioDos', 'criterioTres', 'criterioCuatro', 'criterioCinco', 'criterioSeis', 'criterioSiete', 'criterioOcho'];
                
                for (const criterio of criterios) {
                    if (!document.querySelector(`input[name="${criterio}"]:checked`)) {
                        alert(`Selecciona una opción para ${criterio}`);
                        event.preventDefault();
                        return;
                    }
                }
            });
        </script>

    </body>
    </html>
</x-app-layout>
