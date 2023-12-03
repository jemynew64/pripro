<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('user.create') }}">registro</a>
    <table>
        <thead>
            <tr>
                <th>
                    nombre
                </th>
                <th>
                    email
                </th>
                <th>
                    tipo de usuario
                </th>
                <th>
                    acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $p)
                <tr>
                    <td>
                        {{ $p->name }}
                    </td>
                    <td>
                        {{$p->email}}
                    </td>
                    <td>
                        {{ $p->Usertype->name }}
                    </td>
                    <td>
                        <a href="{{ route('user.edit', $p) }}">editar</a>
                        <a href="{{ route('user.show', $p) }}">ver</a>

                        <form action="{{ route('user.destroy', $p) }}" method="post">
                            @method('delete') @csrf
                            <button type="submit">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
