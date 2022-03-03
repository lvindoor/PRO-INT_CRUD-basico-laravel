<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Grabacion</title>
</head>
<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @isset($video)
        <form action="/video/{{ $video->id }}" method="POST" > {{-- Editar --}}
        @method('PATCH')
    @else
        <form action="/video" method="POST" > {{-- Crear --}}
    @endisset

            @csrf
            <h1>Registra tu clase</h1>
            <label for="video">Selecciona tu video:</label> <br>
            <input type="file" id="video" name="video"> <br>

            <label for="class">
                <input id="class" name="class" type="text" placeholder="Clase"
                value="{{ isset($video) ? $video->class : ''}}" required> <br>
            </label>
            <label for="theme">
                <input id="theme" name="theme" type="text" placeholder="Tema"
                value="{{ isset($video) ? $video->theme : ''}}" required> <br>
            </label>
            <label for="duracion">
                <input id="duracion" name='duration' type="text" placeholder="Duracion"
                value="{{ isset($video) ? $video->duration : ''}}" required> <br>
            </label>
            <label for="size">
                <input id="size" name="size" type="text" placeholder="Tamaño del archivo"
                value="{{ isset($video) ? $video->size : ''}}" required> <br>
            </label>
            <button type="submit">Enviar</button>
        </form>

     <style>

        form {
            width: 500px;
            padding: 20px;
            margin: auto;
            text-align: center;
        }

        input {
            width: 80%;
            margin: 5px;
            padding: 15px;
        }

        button {
            margin: 10px;
            padding: 5px;
            width: 50%;
            cursor: pointer;
        }

     </style>

</body>
</html>
