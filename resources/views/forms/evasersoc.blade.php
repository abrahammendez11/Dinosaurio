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


        <title>Evaluacion de Servicio Social</title>
    </head>
    <body>

        <div class="p-4">
            <p>SUSPENCION O CANCELACION DE SERVICIO SOCIAL</p>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">NOMBRE</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">PROGRAMA</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">FECHA QUE SE REPORTA</label>
                    <input type="text" class="form-control" id="validationCustom03" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">NIVEL ACADEMICO</label>
                    <input type="text" class="form-control" id="validationCustom04" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">INSTITUCION ECONOMICA</label>
                    <input type="text" class="form-control" id="validationCustom05" value="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">TELEFONO</label>
                    <input type="text" class="form-control" id="validationCustom06" value="" required>
                  </div>

                  
                <table class="table table-bordered">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <p>Cumple en tiempo y forma con las actividades encomendadas alcanzando objetivos</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <p>Las actividades corresponden al perfil academico del prestador de servicio social</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <p>El trato al prestador de servicio social es digno.</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>
                            <p>Trabaja en equipo y se adapta a nuevas situaciones.</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>
                            <p>Muestra inactiva en las actividades encomendadas.</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>
                            <p>Organiza su tiempo y trabaja de manera proactiva.</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>
                            <p>Interpreta la realidad y se sensibiliza aportando soluciones a la problematica con la actividad.</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>
                            <p>Realiza sugerencias para beneficiarlo o mejora del programa en el que participa.</p>
                          </td>
                        <td> 
                           <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="Insuficiente">
                                <label class="form-check-label" for="Insuficiente"></label>
                            </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Suficiente">
                            <label class="form-check-label" for="Suficiente"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Bueno">
                            <label class="form-check-label" for="Bueno"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Notable">
                            <label class="form-check-label" for="Notable"></label>
                        </div>
                        </td>
                        <td><div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Excelente">
                            <label class="form-check-label" for="Excelente"></label>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="input-group">
                    <span class="input-group-text">Observaciones</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                 </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Exportar Documento</button>
                </div>
                </form>
              </form>
           </div> 
        
    </body>
    </html>
</x-app-layout>