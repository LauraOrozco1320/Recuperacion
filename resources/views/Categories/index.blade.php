<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CATEGORIA</h1>

    <a href="{{ route('categories.create') }}">Nueva Categoria</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>IVA</th>
                <th>DESCRIPCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->IVA }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}">Mostrar</a>
                        <a href="{{ route('categories.edit', $category->id) }}">Editar</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
       
</body>
</html>