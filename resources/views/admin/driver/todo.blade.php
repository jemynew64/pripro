@csrf
<div class="mb-4 w-full">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
    <input type="text" name="name" value="{{ old('name', $driver->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="dni" class="block text-gray-700 text-sm font-bold mb-2">DNI</label>
    <input type="text" name="dni" value="{{ old('dni', $driver->dni) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Teléfono</label>
    <input type="text" name="phone" value="{{ old('phone', $driver->phone) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="license_number" class="block text-gray-700 text-sm font-bold mb-2">Número de Licencia</label>
    <input type="text" name="license_number" value="{{ old('license_number', $driver->license_number) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Categoría</label>
    <input type="text" name="category" value="{{ old('category', $driver->category) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>