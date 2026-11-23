<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-gray-800">
            🏋️ Planes de Entrenamiento
        </h2>
    </x-slot>

    <div class="py-8 bg-zinc-950 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- BANNER --}}
            <div class="bg-gradient-to-r from-orange-600 to-orange-500 rounded-2xl p-6 mb-6 text-white shadow-lg flex justify-between items-center">
                <div>
                    <h3 class="text-3xl font-black">💪 ELIGE TU PLAN</h3>
                    <p class="opacity-90">Sin excusas. Entrena a tu ritmo, a tu nivel.</p>
                </div>
                <a href="{{ route('planes.create') }}" class="bg-black hover:bg-zinc-800 text-white font-bold px-6 py-3 rounded-xl shadow">
                    + Nuevo Plan
                </a>
            </div>

            {{-- SI NO HAY PLANES --}}
            @if($planes->isEmpty())
                <div class="bg-white rounded-2xl p-10 text-center shadow">
                    <p class="text-6xl">🏋️</p>
                    <h3 class="text-2xl font-black mt-3">Aún no hay planes</h3>
                    <p class="text-gray-500">Crea tu primer plan para empezar a vender membresías.</p>
                    <a href="{{ route('planes.create') }}" class="inline-block mt-5 bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-xl">Crear Primer Plan</a>
                </div>
            @else
                {{-- TARJETAS DE PLANES --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($planes as $plan)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl border-t-8 border-orange-500">
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <h3 class="text-2xl font-black uppercase">{{ $plan->nombre }}</h3>
                                <span class="bg-orange-100 text-orange-700 text-xs font-black px-3 py-1 rounded-full">{{ $plan->duracion }} días</span>
                            </div>
                            <p class="text-gray-500 mt-2 min-h-[50px]">{{ $plan->descripcion }}</p>
                            
                            <p class="mt-4 text-center">
                                <span class="text-4xl font-black">${{ number_format($plan->precio, 0) }}</span>
                                <span class="text-gray-400 text-sm">/ {{ $plan->duracion }} días</span>
                            </p>

                            <div class="grid grid-cols-2 gap-2 mt-5">
                                <a href="{{ route('planes.edit', $plan) }}" class="text-center bg-zinc-900 hover:bg-black text-white font-bold py-2.5 rounded-xl">Editar</a>
                                <form action="{{ route('planes.destroy', $plan) }}" method="POST" onsubmit="return confirm('¿Eliminar este plan?')">
                                    @csrf @method('DELETE')
                                    <button class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2.5 rounded-xl">Eliminar</button>
                                </form>
                            </div>
                        </div>
                        <div class="bg-zinc-900 text-white text-center py-2 text-xs font-bold tracking-widest">MI GIMNASIO • SIN EXCUSAS</div>
                    </div>
                    @endforeach
                </div>
            @endif

            <div class="mt-8 text-center">
                <a href="{{ route('dashboard') }}" class="text-white font-bold hover:text-orange-400">← Volver al Panel</a>
            </div>

        </div>
    </div>
</x-app-layout>