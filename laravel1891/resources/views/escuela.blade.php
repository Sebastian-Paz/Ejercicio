<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liceo servantes</h1>

    <form action="{{route('escuela.escuelitas')}}"  method="POST">    

        @csrf
    
        <label>
            ingrese su nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Ingrese su identificacion:
            <br>
            <input type="number" name="identification">
        </label>
       
        <br><br><br>

        <button type="submit">Enviar :</button>
       
   
    </form>
</body>
</html>