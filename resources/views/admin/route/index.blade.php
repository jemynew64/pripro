@extends("admin.admin_dashboard") 

@section('name')

<a href="{{ route('route.create') }}" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Crear ruta</a>

<table class="min-w-full divide-y divide-gray-200 mt-4">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                nombre
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                frecuencia
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                max_hour
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                turno
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                acciones
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($route as $p)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{$p->frequency}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->max_hour }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->turn->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('route.edit', $p) }}" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">editar</a>
                    <a href="{{ route('route.show', $p) }}" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">ver</a>

                    <form action="{{ route('route.destroy', $p) }}" method="post" class="inline">
                        @method('delete') @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white font-bold rounded hover:bg-blue-700">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $route->links() }}

@endsection