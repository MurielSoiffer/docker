<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Lista de colores</h2>
    <ul>
        @forelse ($colores as $color)
        <li>{{ $color->color }}</li>
        @empty
            <li>No hay colores registrados.</li>
        @endforelse
    </ul>
</body>
</html>