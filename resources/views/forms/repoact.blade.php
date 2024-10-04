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

            <button id="ModifActivities" class="btn btn-warning" type="button" onclick="Editar info()"> 
            <span class="bi bi-pencil-fill"></span> </button>
            <button id="DeleteActivities" class="btn btn-danger" type="button" onclick="Eliminar info()"> 
            <span class="bi bi-trash3"></span> </button>
        
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Nombre</span>
            <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Escuela</span>
            <input type="text" class="form-control" placeholder="Escuela" aria-label="School" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Carrera o Nivel</span>
            <input type="text" class="form-control" placeholder="Carrera o Nivel" aria-label="Grade" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Dependencia</span>
            <input type="text" class="form-control" placeholder="Dependencia" aria-label="Dependence" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Area de Adscripcion</span>
            <input type="text" class="form-control" placeholder="Area Especifica de Adscripcion" aria-label="Area" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Nombre del Programa</span>
            <input type="text" class="form-control" placeholder="Programa" aria-label="Proyect" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Numero de Horas Cubiertas</span>
            <input type="text" class="form-control" placeholder="Horas Cubiertas" aria-label="Hours" aria-describedby="addon-wrapping">
        </div>      
        <div class="input-group flex-nowrap p-3">
            <span class="input-group-text" id="addon-wrapping">Numero de Personas Beneficiadas</span>
            <input type="text" class="form-control" placeholder="Personas Beneficiadas" aria-label="People" aria-describedby="addon-wrapping">
        </div>    
        <div class="input-group p-3">
            <span class="input-group-text">Actividades Realizadas</span>
            <textarea class="form-control" placeholder="Describir de Manera Cuantitativa las Actividades en el Servicio" aria-label=" Activities "></textarea>
        </div>
        
    </body>
    </html>
</x-app-layout>