<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🏋️ MI GIMNASIO
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-6">

                <!-- PLANES -->
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-2xl font-bold mb-4">📋 Planes</h3>
                    <a href="{{ route('planes.index') }}" class="block bg-blue-500 text-white py-2 px-4 rounded mb-2">Ver Todos los Planes</a>
                    <a href="{{ route('planes.create') }}" class="block bg-green-500 text-white py-2 px-4 rounded">Crear Plan Nuevo</a>
                </div>

                <!-- MIEMBROS -->
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-2xl font-bold mb-4">💪 Miembros</h3>
                    <a href="{{ route('miembros.index') }}" class="block bg-blue-500 text-white py-2 px-4 rounded mb-2">Ver Todos los Miembros</a>
                    <a href="{{ route('miembros.create') }}" class="block bg-green-500 text-white py-2 px-4 rounded">Registrar Miembro Nuevo</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>