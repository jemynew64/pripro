@extends("admin.admin_dashboard") 

@section('name')

<a href="{{ route('driver.create') }}" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Agregar conductor</a>

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                dni
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                phone
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                license_number
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                category
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                acciones
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($drivers as $p)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{$p->dni}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->phone }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->license_number }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $p->category }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('driver.edit', $p) }}" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">editar</a>
                    <a href="{{ route('driver.show', $p) }}" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">ver</a>

                    <form action="{{ route('driver.destroy', $p) }}" method="post" class="inline">
                        @method('delete') @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white font-bold rounded hover:bg-blue-700">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $drivers->links() }}

@endsection