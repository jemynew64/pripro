@extends("admin.admin_dashboard") 

@section('name')

<table>
    <thead>
        <tr>
            <th>
                nombre
            </th>
            <th>
                frecuencia
            </th>
            <th>
                max_hour
            </th>
            <th>
                turno
            </th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>
                    {{ $route->name }}
                </td>
                <td>
                    {{$route->frequency}}
                </td>
                <td>
                    {{ $route->max_hour }}
                </td>
                <td>
                    {{ $route->turn->name }}
                </td>
            </tr>

    </tbody>
</table>
@endsection