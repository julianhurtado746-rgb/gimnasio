<x-app-layout>
    <h1>Crear Plan</h1>
    <form action="{{ route('planes.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>
        <label>Descripción:</label>
        <input type="text" name="descripcion">
        <label>Duración (meses):</label>
        <input type="number" name="duracion_mes" required>
        <button type="submit">Guardar</button>
    </form>
</x-app-layout>