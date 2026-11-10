<x-app-layout>
    <h1>Planes</h1>
    <a href="{{ route('planes.create') }}">+ Nuevo Plan</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Duración</th>
            <th>Acciones</th>
        </tr>
        @foreach($planes as $plan)
        <tr>
            <td>{{ $plan->nombre }}</td>
            <td>${{ $plan->precio }}</td>
            <td>{{ $plan->descripcion }}</td>
            <td>{{ $plan->duracion_mes }} meses</td>
            <td>
                <a href="{{ route('planes.edit', $plan) }}">Editar</a>
                <form action="{{ route('planes.destroy', $plan) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</x-app-layout>