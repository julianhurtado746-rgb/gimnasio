<x-app-layout>
    <x-slot name="header">
        <h2>Miembros del Gimnasio</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto px-4">
        <a href="{{ route('miembros.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Nuevo Miembro</a>

        @if(session('success'))
            <p style="color:green; margin-top:10px;">{{ session('success') }}</p>
        @endif

        <table border="1" cellpadding="10" style="margin-top:20px; width:100%; background:white;">
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            @foreach($miembros as $m)
            <tr>
                <td>{{ $m->nombre }}</td>
                <td>{{ $m->cedula }}</td>
                <td>{{ $m->telefono }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->estado }}</td>
                <td>
    <a href="{{ route('miembros.show', $m->id) }}" style="background:#D6E8FF; padding:5px 8px; border-radius:8px;">Ver</a>
    <a href="{{ route('miembros.edit', $m->id) }}" style="background:#FFE9A8; padding:5px 8px; border-radius:8px;">Editar</a>
    <form action="{{ route('miembros.destroy', $m->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Seguro quieres eliminar?')">
        @csrf
        @method('DELETE')
        <button type="submit" style="background:#FFC2C2; padding:5px 8px; border-radius:8px; border:none;">Eliminar</button>
    </form>
</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>