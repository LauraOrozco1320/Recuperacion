<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DETALLES DE LA CATEGORIA</h1>

    <p>ID: {{ $category->id }}</p>
    <p>IVA: {{ $category->IVA }}</p>
    <p>Descripcion: {{ $category->description }}</p>

    <a href="{{ route('categories.index') }}">Volver</a>
</body>
</html>