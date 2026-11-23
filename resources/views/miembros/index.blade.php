<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-gray-800">
            💪 Miembros del Gimnasio
        </h2>
    </x-slot>

    <div class="py-8 bg-zinc-950 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- BANNER --}}
            <div class="bg-gradient-to-r from-zinc-900 to-zinc-800 rounded-2xl p-6 mb-6 text-white shadow-lg flex justify-between items-center border-l-8 border-orange-500">
                <div>
                    <h3 class="text-3xl font-black">🏋️ NUESTROS ATLETAS</h3>
                    <p class="text-gray-300">Gestiona a todos los que entrenan contigo.</p>
                </div>
                <a href="{{ route('miembros.create') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-xl shadow">
                    + Registrar Miembro
                </a>
            </div>

            {{-- TABLA --}}
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-orange-500 text-white text-left">
                                <th class="px-6 py-4 font-black">Nombre</th>
                                <th class="px-6 py-4 font-black">Cédula</th>
                                <th class="px-6 py-4 font-black">Teléfono</th>
                                <th class="px-6 py-4 font-black">Email</th>
                                <th class="px-6 py-4 font-black">Estado</th>
                                <th class="px-6 py-4 font-black text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($miembros as $miembro)
                            <tr class="border-b hover:bg-orange-50">
                                <td class="px-6 py-4 font-bold flex items-center gap-3">
                                    <span class="w-10 h-10 bg-zinc-900 text-white rounded-full flex items-center justify-center font-black">💪</span>
                                    {{ $miembro->nombre }}
                                </td>
                                <td class="px-6 py-4">{{ $miembro->cedula }}</td>
                                <td class="px-6 py-4">{{ $miembro->telefono }}</td>
                                <td class="px-6 py-4">{{ $miembro->email }}</td>
                                <td class="px-6 py-4">
                                    @if($miembro->estado == 'activo' || $miembro->estado == 'Activo')
                                        <span class="bg-green-100 text-green-700 font-black text-xs px-3 py-1 rounded-full">● ACTIVO</span>
                                    @else
                                        <span class="bg-red-100 text-red-700 font-black text-xs px-3 py-1 rounded-full">● INACTIVO</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2 justify-center">
                                        <a href="{{ route('miembros.edit', $miembro) }}" class="bg-zinc-900 hover:bg-black text-white text-sm font-bold px-4 py-2 rounded-lg">Editar</a>
                                        <form action="{{ route('miembros.destroy', $miembro) }}" method="POST" onsubmit="return confirm('¿Eliminar este miembro?')">
                                            @csrf @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-600 text-white text-sm font-bold px-4 py-2 rounded-lg">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-12">
                                    <p class="text-6xl">🏋️</p>
                                    <p class="text-xl font-black mt-3">Aún no hay miembros registrados</p>
                                    <p class="text-gray-500">Registra tu primer atleta y empieza a entrenar.</p>
                                    <a href="{{ route('miembros.create') }}" class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-xl">Registrar Primer Miembro</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('dashboard') }}" class="text-white font-bold hover:text-orange-400">← Volver al Panel</a>
            </div>

        </div>
    </div>
</x-app-layout>