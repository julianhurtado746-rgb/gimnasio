<x-app-layout>
    <x-slot name="header">
        <h2>Registrar Miembro</h2>
    </x-slot>

    <div class="py-6 max-w-xl mx-auto px-4 bg-white rounded mt-6">
        <form method="POST" action="{{ route('miembros.store') }}">
            @csrf
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required class="w-full border rounded p-2 mb-3"><br>

            <label>Cédula:</label><br>
            <input type="text" name="cedula" required class="w-full border rounded p-2 mb-3"><br>

            <label>Teléfono:</label><br>
            <input type="text" name="telefono" class="w-full border rounded p-2 mb-3"><br>

            <label>Email:</label><br>
            <input type="email" name="email" class="w-full border rounded p-2 mb-3"><br>

            <label>Fecha Nacimiento:</label><br>
            <input type="date" name="fecha_nacimiento" class="w-full border rounded p-2 mb-3"><br>
            <label>Plan:</label><br>
<select name="plan_id" required class="w-full border rounded p-2 mb-3">
    <option value="">Seleccione un plan</option>
    @foreach($planes as $plan)
        <option value="{{ $plan->id }}">{{ $plan->nombre }} - ${{ $plan->precio }}</option>
    @endforeach
</select><br>
<button type="submit" style="background-color: blue; color: white; padding: 10px 20px; border: none; cursor: pointer;">
    Guardar Miembro
</button>
        </form>
        <br><br>

    </div>
</x-app-layout>