@extends("admin.admin_dashboard") 

@section('name')

<table>
    <thead>
        <tr>
            <th>
                name
            </th>
            <th>
                dni
            </th>
            <th>
                phone
            </th>
            <th>
                lincense_number
            </th>
            <th>
                category
            </th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>
                    {{ $driver->name }}
                </td>
                <td>
                    {{$driver->dni}}
                </td>
                <td>
                    {{ $driver->phone }}
                </td>
                <td>
                    {{ $driver->license_number}}
                </td>
                <td>
                    {{ $driver->category }}
                </td>
            </tr>

    </tbody>
</table>
@endsection