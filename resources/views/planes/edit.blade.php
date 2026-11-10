<x-app-layout>
    <h1>Editar Plan</h1>
    <form action="{{ route('planes.update', $plan) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $plan->nombre }}" required>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ $plan->precio }}" required>
        <label>Descripción:</label>
        <input type="text" name="descripcion" value="{{ $plan->descripcion }}">
        <label>Duración (meses):</label>
        <input type="number" name="duracion_mes" value="{{ $plan->duracion_mes }}" required>
        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>