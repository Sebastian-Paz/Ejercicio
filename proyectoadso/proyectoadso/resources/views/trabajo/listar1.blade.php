<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta Calificación ="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de reseñas</title>
  <link rel="stylesheet" href="style.css"> </head>
<body>

  <h1>Reseñas</h1>

  <table id="cursos-table">
    <thead>
      <tr>
        <th style="background-color: #3498db; color: white;">ID</th>
        <th style="background-color: #3498db; color: white;">Calificacion</th>
        <th style="background-color: #3498db; color: white;">Comentario</th>
        <th style="background-color: #3498db; color: white;">Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($cursos as $curso)
        <tr style="cursor: pointer;" onclick="Details({{ $curso->id }})">
          <td>{{ $curso->id }}</td>
          <td>{{ $curso->Calificación }}</td>
          <td>{{ $curso->Comentario }}</td>
          <td>
            <a href="{{ route('curso.show', $curso->id) }}">Mostrar</a>
            <form action="{{ route('curso.destroy', $curso->id) }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div id="curso-details-modal" style="display: none;">
    <div class="modal-content">
      <span class="close-button" onclick="closeModal()">&times;</span>
      <h2>Detalles del Curso</h2>
      <p id="curso-Calificación "></p>
      <p id="curso-Comentario"></p>
    </div>
  </div>

  <script src="script.js"></script> </body>
</html>