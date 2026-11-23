<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-gray-800">
            💪 Registrar Miembro
        </h2>
    </x-slot>

    <div class="py-8 bg-zinc-950 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-t-8 border-orange-500">
                <div class="bg-zinc-900 text-white p-6 text-center">
                    <h3 class="text-3xl font-black">🏋️ NUEVO ATLETA</h3>
                    <p class="text-gray-300">Registra a tu próximo campeón</p>
                </div>

                <form action="{{ route('miembros.store') }}" method="POST" class="p-6 space-y-5">
                    @csrf

                    <div>
                        <label class="font-black block mb-1">Nombre:</label>
                        <input type="text" name="nombre" required placeholder="Ej: Juan Pérez" class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-black block mb-1">Cédula:</label>
                            <input type="text" name="cedula" required placeholder="Ej: 108524..." class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                        </div>
                        <div>
                            <label class="font-black block mb-1">Teléfono:</label>
                            <input type="text" name="telefono" required placeholder="Ej: 3001234567" class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                        </div>
                    </div>

                    <div>
                        <label class="font-black block mb-1">Email:</label>
                        <input type="email" name="email" required placeholder="Ej: juan@gmail.com" class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-black block mb-1">Fecha Nacimiento:</label>
                            <input type="date" name="fecha_nacimiento" required class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                        </div>
                        <div>
                            <label class="font-black block mb-1">Plan:</label>
                            <select name="plan_id" required class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                                <option value="">Seleccione un plan</option>
                                @foreach($planes as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->nombre }} - ${{ number_format($plan->precio, 0) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="flex gap-3 pt-2">
                        <a href="{{ route('miembros.index') }}" class="flex-1 text-center bg-gray-200 hover:bg-gray-300 font-bold py-3 rounded-xl">Cancelar</a>
                        <button type="submit" class="flex-1 bg-orange-500 hover:bg-orange-600 text-white font-black py-3 rounded-xl shadow">💾 Registrar Atleta</button>
                    </div>
                </form>
            </div>

            <div class="mt-6 text-center">
                <a href="{{ route('dashboard') }}" class="text-white font-bold hover:text-orange-400">← Volver al Panel</a>
            </div>

        </div>
    </div>
</x-app-layout>