<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
</head>
<body>
    <h1>Todas las Grabaciones</h1>
    <h2>Clases subidas</h2>

    <p> <a href="video/create"> Subir Clase </a> </p>

    <table class="table">
        <tr>
            <th>Registro</th>
            <th>Clase</th>
            <th>Tema</th>
            <th>Duracion</th>
            <th>Tamaño</th>
            <th>Emision</th>
            <th>Acciones</th>
        </tr>
        @foreach ($videos as $video)
            <tr>
                <td>{{ $video->id }}</td>
                <td>{{ $video->class }}</td>
                <td>{{ $video->theme }}</td>
                <td>{{ $video->duration }}</td>
                <td>{{ $video->size }}</td>
                <td>{{ $video->broadcast_date }}</td>
                <td>
                    <a href="video/{{$video->id}}"> Ver detalles </a>
                    <a href="video/{{$video->id}}/edit"> Editar </a>
                    <form action="video/{{$video->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap');

        table, th, td {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 15px;
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 25px;
        }

    </style>

</body>
</html>
