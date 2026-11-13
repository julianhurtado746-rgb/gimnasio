<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POWER GYM</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@700;900&display=swap" rel="stylesheet">
  <style>
    .titulo { font-family: 'Anton', sans-serif; letter-spacing: 2px; }
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-black text-white min-h-screen">

  <!-- ARRIBA -->
  <div class="flex justify-between items-center px-10 py-6">
    <h1 class="titulo text-4xl">🏋️ POWER <span class="text-orange-500">GYM</span></h1>
    <div class="flex gap-8">
      <a href="/login" class="font-black text-2xl hover:text-orange-500 underline">Log in</a>
      <a href="/register" class="bg-orange-500 text-black font-black text-2xl px-7 py-3 rounded-full">Register</a>
    </div>
  </div>

  <!-- CENTRO GRANDOTE -->
  <div class="text-center px-6 pt-8">
    <p class="text-orange-500 font-black text-2xl tracking-[4px]">💪 ENTRENA FUERTE • VIVE FUERTE 💪</p>
    <h2 class="titulo text-8xl md:text-[110px] leading-[0.95] mt-6">TU MEJOR<br>VERSIÓN<br><span class="text-orange-500">EMPIEZA AQUÍ</span></h2>
    <p class="text-gray-300 text-3xl font-bold mt-8 max-w-3xl mx-auto leading-snug">Bienvenido a tu gimnasio.<br>Administra tus miembros y tus planes de forma fácil.</p>

    <div class="mt-10 flex justify-center gap-5">
      <a href="/login" class="bg-orange-500 text-black font-black text-3xl py-5 px-12 rounded-full shadow-[0_0_30px_orange]">INICIAR SESIÓN →</a>
      <a href="/register" class="bg-white text-black font-black text-3xl py-5 px-12 rounded-full">REGISTRARSE</a>
    </div>
  </div>

  <!-- 3 CAJAS -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10 pb-10 max-w-6xl mx-auto mt-14">
    <div class="bg-zinc-900 border-2 border-zinc-800 p-10 rounded-3xl text-center">
      <p class="text-7xl">👥</p>
      <h3 class="titulo text-4xl mt-5">MIEMBROS</h3>
      <p class="text-gray-300 font-bold text-xl mt-3">Registra y controla a todos tus clientes.</p>
    </div>
    <div class="bg-orange-500 p-10 rounded-3xl text-center text-black scale-105">
      <p class="text-7xl">📋</p>
      <h3 class="titulo text-4xl mt-5">PLANES</h3>
      <p class="font-bold text-xl mt-3">Mensual, trimestral y anual. Tú eliges.</p>
    </div>
    <div class="bg-zinc-900 border-2 border-zinc-800 p-10 rounded-3xl text-center">
      <p class="text-7xl">🔥</p>
      <h3 class="titulo text-4xl mt-5">CONTROL TOTAL</h3>
      <p class="text-gray-300 font-bold text-xl mt-3">Todo organizado, sin papeles ni Excel.</p>
    </div>
  </div>

  <p class="text-center text-gray-500 font-bold pb-8 text-lg">POWER GYM © 2026</p>

</body>
</html>