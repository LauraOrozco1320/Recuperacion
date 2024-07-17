<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDITAR CATEGORIA</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            IVA:
            <br>
            <input type="integer" name="IVA" value="{{ old('IVA', $category->IVA) }}">
        </label>
        <br>
        <label>
            DESCRIPCION:
            <br>
            <input type="text" name="description" value="{{ old('description', $category->description) }}">
        </label>
        <br>
        <button type="submit">GUARDAR</button>
    </form>
</body>
</html>