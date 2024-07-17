<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CREAR CATEGORIA</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label>
            IVA:
            <br>
            <input type="integer" name="IVA">
        </label>
        <br>
        <label>
            DESCRIPCION:
            <br>
            <input type="text" name="description">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>