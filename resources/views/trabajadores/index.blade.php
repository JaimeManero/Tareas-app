<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista trabajadores</h1>
    <a href="/trabajadores/create">Añadir Trabajador</a>
    <ul>
        @foreach ($trabajadores as $trabajador)
            <li>{{$trabajador->nombre}}{{$trabajador->apellido}}</li>        
        @endforeach
    </ul>
</body>
</html>