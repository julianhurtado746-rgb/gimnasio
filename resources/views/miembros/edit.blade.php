<x-diseños.app>

<div style="min-height: 85vh; background: #0f0f0f; display: flex; align-items: center; justify-content: center; padding: 30px 15px; margin: -20px; font-family: 'Segoe UI', sans-serif;">

  <div style="width: 100%; max-width: 520px; background: #1a1a1a; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.6); border: 1px solid #2a2a2a;">

    <div style="background: linear-gradient(135deg, #e63946 0%, #b91c1c 100%); padding: 30px 25px; text-align: center;">
      <div style="font-size: 40px;">💪</div>
      <h2 style="color: white; margin: 5px 0 0 0; font-size: 26px; font-weight: 900; text-transform: uppercase; letter-spacing: 1px;">Editar Miembro</h2>
      <p style="color: rgba(255,255,255,0.85); margin: 5px 0 0 0; font-size: 14px;">Actualiza la información del miembro</p>
    </div>

    <form method="POST" action="{{ route('miembros.update', $miembro->id) }}" style="padding: 30px 28px;">
      @csrf
      @method('PUT')

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">👤 Nombre</label>
      <input type="text" name="nombre" value="{{ old('nombre', $miembro->nombre) }}" required
        style="width: 100%; padding: 14px 15px; margin-bottom: 20px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">📧 Correo</label>
      <input type="email" name="email" value="{{ old('email', $miembro->email) }}" required
        style="width: 100%; padding: 14px 15px; margin-bottom: 20px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">📱 Teléfono</label>
      <input type="text" name="telefono" value="{{ old('telefono', $miembro->telefono) }}" required
        style="width: 100%; padding: 14px 15px; margin-bottom: 20px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">

      <label style="display:block; color: #fff; font-weight: 800; font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">🏷️ Plan</label>
      <select name="plan_id" required style="width: 100%; padding: 14px 15px; margin-bottom: 28px; background: #2a2a2a; border: 1px solid #3a3a3a; border-radius: 12px; color: white; font-size: 15px; box-sizing: border-box; outline: none;">
        @foreach($planes as $plan)
          <option value="{{ $plan->id }}" {{ $miembro->plan_id == $plan->id ? 'selected' : '' }}>{{ $plan->nombre }} - ${{ number_format($plan->precio, 0) }}</option>
        @endforeach
      </select>

      <div style="display: flex; gap: 12px;">
        <button type="submit" style="flex: 2; padding: 15px; background: #e63946; color: white; border: none; border-radius: 12px; font-weight: 900; font-size: 15px; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; box-shadow: 0 8px 20px rgba(230,57,70,0.4);">
          🔥 Actualizar Miembro
        </button>
        <a href="{{ route('miembros.index') }}" style="flex: 1; display: flex; align-items: center; justify-content: center; background: #2a2a2a; color: #ccc; border-radius: 12px; text-decoration: none; font-weight: 700; font-size: 14px;">
          Cancelar
        </a>
      </div>

      <p style="text-align: center; color: #666; font-size: 12px; margin-top: 20px;">MI GIMNASIO • Panel de Administración</p>
    </form>
  </div>
</div>

</x-diseños.app>