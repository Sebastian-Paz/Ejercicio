<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de reseñas</title>
</head>
<body>
    <h1>Reseñas </h1>

<form action="{{route('resena.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Calificacion:
    <br>
    <input type="text" Calificacion="Calificacion">
</label>
<br>
<label>
    Comentario:
    <br>
    <input type="text" Comentario="Comentario">
</label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>