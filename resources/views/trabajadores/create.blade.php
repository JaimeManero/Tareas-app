<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir Trabajador</h1>
    <form action="/trabajadores/store" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido" placeholder="Apellido"><br>
        <input type="text" name="dni" placeholder="DNI"><br>
        <input type="submit" value="Añadir Trabajador">
    </form>
</body>
</html>