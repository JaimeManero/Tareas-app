<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir Tarea</h1>
    <form action="/tareas/store" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Titulo"><br>
        <textarea name="descripcion" placeholder="Descripcion"></textarea><br>
        <input type="date" name="fecha_limite"><br>
        <input type="text" name="trabajador_id" placeholder="trabajador_id"><br>
        <button type="submit">Añadir</button>
    </form>
</body>
</html>