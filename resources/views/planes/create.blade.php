<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-gray-800">🏋️ Crear Nuevo Plan</h2>
    </x-slot>
    <div class="py-8 bg-zinc-950 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-t-8 border-orange-500">
                <div class="bg-zinc-900 text-white p-6 text-center">
                    <h3 class="text-3xl font-black">💪 NUEVO PLAN</h3>
                    <p class="text-gray-300">Crea un plan para tus atletas</p>
                </div>
                <form action="{{ route('planes.store') }}" method="POST" class="p-6 space-y-5">
                    @csrf
                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl">
                            <strong>¡Falta algo!</strong>
                            <ul class="list-disc ml-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div>
                        <label class="font-black block mb-1">Nombre del Plan:</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" required placeholder="Ej: Mensual" class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="font-black block mb-1">Precio ($):</label>
                            <input type="number" name="precio" value="{{ old('precio') }}" required placeholder="50000" class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                        </div>
                        <div>
                            <label class="font-black block mb-1">Duración (meses):</label>
                            <input type="number" name="duracion_mes" value="{{ old('duracion_mes') }}" required placeholder="1" class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">
                        </div>
                    </div>
                    <div>
                        <label class="font-black block mb-1">Descripción:</label>
                        <textarea name="descripcion" rows="3" placeholder="Ej: Acceso a todas las máquinas..." class="w-full rounded-xl border-gray-300 focus:border-orange-500 focus:ring-orange-500 p-3 border">{{ old('descripcion') }}</textarea>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('planes.index') }}" class="flex-1 text-center bg-gray-200 hover:bg-gray-300 font-bold py-3 rounded-xl">Cancelar</a>
                        <button type="submit" class="flex-1 bg-orange-500 hover:bg-orange-600 text-white font-black py-3 rounded-xl shadow">💾 Guardar Plan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>