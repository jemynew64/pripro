@csrf
<div class="mb-4 w-full">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
    <input type="text" name="name" value="{{ old('name', $route->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="frequency" class="block text-gray-700 text-sm font-bold mb-2">Frecuencia</label>
    <input type="text" name="frequency" value="{{ old('frequency', $route->frequency) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="max_hour" class="block text-gray-700 text-sm font-bold mb-2">Max Hour</label>
    <input type="time" name="max_hour" value="{{ old('max_hour', $route->max_hour) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4 w-full">
    <label for="turn_id" class="block text-gray-700 text-sm font-bold mb-2">Turno</label>
    <select name="turn_id" class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <option value="1" {{ old('turn_id', $route->turn_id) == 1 ? 'selected' : '' }}>Mañana</option>
        <option value="2" {{ old('turn_id', $route->turn_id) == 2 ? 'selected' : '' }}>Tarde</option>
        <option value="3" {{ old('turn_id', $route->turn_id) == 3 ? 'selected' : '' }}>Noche</option>
    </select>
</div>

<button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>