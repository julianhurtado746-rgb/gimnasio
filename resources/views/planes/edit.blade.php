<x-diseños.app>

<div style="min-height: 85vh; background: #0f0f0f; display: flex; align-items: center; justify-content: center; padding: 30px 15px; margin: -20px; font-family: 'Segoe UI', sans-serif;">

  <div style="width: 100%; max-width: 520px; background: #1a1a1a; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.6); border: 1px solid #2a2a2a;">

    {{-- HEADER GIMNASIO --}}
    <div style="background: linear-gradient(135deg, #e63946 0%, #b91c1c 100%); padding: 30px 25px; text-align: center;">
      <div style="font-size: 40px;">💪</div>
      <h2 style="color: white; margin: 5px 0 0 0; font-size: 26px; font-weight: 900; text-transform: uppercase; letter-spacing: 1px;">Editar Plan</h2>
      <p style="color: rgba(255,255,255,0.85); margin: 5px 0 0 0; font-size: 14px;">Actualiza la información de tu plan</p>
    </div>

    {{-- FORMULARIO --}}
    <form method="POST" action="{{ route('planes.update', $plan->id) }}" style="padding: 30px 28px;">
      @csrf
      @method('PUT')

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">🏷️ Nombre del Plan</label>
      <input type="text" name="nombre" value="{{ old('nombre', $plan->nombre) }}" required placeholder="Ej: Mensual, Trimestral"
        style="width: 100%; padding: 14px 15px; margin-bottom: 20px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">
      
      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">💰 Precio</label>
      <input type="number" step="0.01" name="precio" value="{{ old('precio', $plan->precio) }}" required placeholder="0.00"
        style="width: 100%; padding: 14px 15px; margin-bottom: 20px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">📝 Descripción</label>
      <textarea name="descripcion" rows="3" required placeholder="¿Qué incluye este plan?"
        style="width: 100%; padding: 14px 15px; margin-bottom: 20px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none; resize: vertical;">{{ old('descripcion', $plan->descripcion) }}</textarea>

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">⏱️ Duración (meses)</label>
      <input type="number" name="duracion_mes" min="1" value="{{ old('duracion_mes', $plan->duracion_mes) }}" required style="width: 100%; padding: 14px 15px; margin-bottom: 28px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">

      {{-- BOTONES --}}
      <div style="display: flex; gap: 12px;">
        <button type="submit" style="flex: 2; padding: 15px; background: #e63946; color: white; border: none; border-radius: 12px; font-weight: 900; font-size: 15px; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; box-shadow: 0 8px 20px rgba(230,57,70,0.4);">
          🔥 Actualizar Plan
        </button>
        <a href="{{ route('planes.index') }}" style="flex: 1; display: flex; align-items: center; justify-content: center; background: #2a2a2a; color: #ccc; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 14px;">
          Cancelar
        </a>
      </div>

      <p style="text-align: center; color: #666; font-size: 12px; margin-top: 20px;">MI GIMNASIO • Panel de Administración</p>
    </form>
  </div>
</div>

</x-diseños.app>