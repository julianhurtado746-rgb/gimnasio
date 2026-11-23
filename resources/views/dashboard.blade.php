<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-gray-800">
            🏋️ MI GIMNASIO - Panel Principal
        </h2>
    </x-slot>

    <div class="py-8 bg-zinc-950 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-orange-500 rounded-2xl p-6 mb-6 text-white shadow-lg">
                <h3 class="text-3xl font-black">¡A ENTRENAR! 💪</h3>
                <p class="mt-1">Bienvenido {{ Auth::user()->name }}, hoy es un buen día para ser más fuerte.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- PLANES --}}
                <div class="bg-white rounded-2xl p-6 shadow-lg border-t-8 border-orange-500">
                    <h3 class="text-2xl font-black text-center">📋 Planes</h3>
                    <p class="text-center text-gray-500 mt-1">Mensual, Trimestral, Anual</p>
                    <div class="mt-5 space-y-3">
                        <a href="{{ route('planes.index') }}" class="block text-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded-xl">Ver Todos los Planes</a>
                        <a href="{{ route('planes.create') }}" class="block text-center bg-zinc-900 hover:bg-black text-white font-bold py-3 rounded-xl">Crear Nuevo Plan</a>
                    </div>
                </div>

                {{-- MIEMBROS --}}
                <div class="bg-white rounded-2xl p-6 shadow-lg border-t-8 border-zinc-900">
                    <h3 class="text-2xl font-black text-center">💪 Miembros</h3>
                    <p class="text-center text-gray-500 mt-1">Gestiona tus atletas</p>
                    <div class="mt-5 space-y-3">
                        <a href="{{ route('miembros.index') }}" class="block text-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded-xl">Ver Todos los Miembros</a>
                        <a href="{{ route('miembros.create') }}" class="block text-center bg-zinc-900 hover:bg-black text-white font-bold py-3 rounded-xl">Registrar Miembro</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>