<x-app-layout>
    <div class="py-12 max-w-2xl mx-auto">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-bold mb-4">Editar Miembro</h2>
            <form action="{{ route('miembros.update', $miembro->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ $miembro->nombre }}" class="w-full border rounded mb-3 p-2" required>

                <label>Cédula</label>
                <input type="text" name="cedula" value="{{ $miembro->cedula }}" class="w-full border rounded mb-3 p-2" required>

                <label>Teléfono</label>
                <input type="text" name="telefono" value="{{ $miembro->telefono }}" class="w-full border rounded mb-3 p-2" required>

                <label>Email</label>
                <input type="email" name="email" value="{{ $miembro->email }}" class="w-full border rounded mb-3 p-2" required>
                <label>Plan</label>
<select name="plan_id" class="w-full border rounded mb-3 p-2" required>
    <option value="">-- Selecciona un plan --</option>
    @foreach($planes as $plan)
        <option value="{{ $plan->id }}" {{ $miembro->plan_id == $plan->id ? 'selected' : '' }}>
            {{ $plan->nombre }}
        </option>
    @endforeach
</select>

                <label>Estado</label>
                <select name="estado" class="w-full border rounded mb-4 p-2">
                    <option value="activo" {{ $miembro->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                    <option value="inactivo" {{ $miembro->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>

                <button class="bg-green-500 text-white px-4 py-2 rounded">Actualizar</button>
                <a href="{{ route('miembros.index') }}" class="ml-2">Cancelar</a>
            </form>
        </div>
    </div>
</x-app-layout>
