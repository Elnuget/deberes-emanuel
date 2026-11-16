<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Acceso - Deberes Emanuel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full flex items-center justify-center p-4 bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950 text-slate-100 antialiased" x-data="{ showManual: false }">

    <div class="max-w-md w-full my-auto">
        <!-- Logo y Encabezado -->
        <div class="text-center mb-8">
            <div class="inline-flex w-20 h-20 rounded-3xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 items-center justify-center text-white text-3xl shadow-2xl shadow-indigo-500/30 mb-4 animate-bounce">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-white">Deberes Emanuel</h1>
            <p class="text-sm text-slate-400 mt-2 font-medium">Plataforma de entrega de deberes para Matemática y Computación</p>
        </div>

        <!-- Alertas -->
        @if(session('error') || $errors->any())
            <div class="bg-rose-500/20 border border-rose-500/40 text-rose-300 px-4 py-3 rounded-2xl mb-6 text-sm font-semibold flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation text-lg"></i>
                <span>{{ session('error') ?? $errors->first() }}</span>
            </div>
        @endif

        @if(session('success'))
            <div class="bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 px-4 py-3 rounded-2xl mb-6 text-sm font-semibold flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-lg"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Tarjetas de Acceso Rápido con 1 Clic -->
        <div class="bg-slate-800/60 backdrop-blur-xl border border-slate-700/60 rounded-3xl p-6 sm:p-8 shadow-2xl shadow-black/40">
            <div class="text-center mb-6">
                <span class="text-xs font-bold uppercase tracking-wider text-indigo-400 bg-indigo-500/10 px-3 py-1 rounded-full border border-indigo-500/20">
                    Acceso Rápido
                </span>
                <h2 class="text-xl font-bold text-white mt-2">¿Quién eres hoy?</h2>
            </div>

            <div class="space-y-4">
                <!-- Botón Emanuel (Estudiante) -->
                <a href="{{ route('quick.login', 'emanuel') }}" class="group relative flex items-center p-4 bg-gradient-to-r from-indigo-900/60 to-purple-900/60 hover:from-indigo-600 hover:to-purple-600 border border-indigo-500/40 hover:border-indigo-400 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-indigo-500/25 active:scale-95">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500 text-white flex items-center justify-center text-xl font-bold mr-4 shadow-md group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div class="flex-1 text-left">
                        <h3 class="font-extrabold text-base text-white">Soy Emanuel</h3>
                        <p class="text-xs text-indigo-200/80 group-hover:text-white transition-colors">Subir mis deberes de Matemática o Computación</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-indigo-300 group-hover:text-white group-hover:translate-x-1 transition-all"></i>
                </a>

                <!-- Botón Profesor Carlos -->
                <a href="{{ route('quick.login', 'profesor') }}" class="group relative flex items-center p-4 bg-slate-800/80 hover:bg-slate-700 border border-slate-700 hover:border-slate-600 rounded-2xl transition-all duration-300 shadow-md active:scale-95">
                    <div class="w-12 h-12 rounded-xl bg-purple-600/30 text-purple-300 border border-purple-500/40 flex items-center justify-center text-xl font-bold mr-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="flex-1 text-left">
                        <h3 class="font-extrabold text-base text-white">Soy el Prof. Carlos</h3>
                        <p class="text-xs text-slate-400 group-hover:text-slate-200 transition-colors">Revisar entregas, calificar y asignar tareas</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-slate-500 group-hover:text-slate-300 group-hover:translate-x-1 transition-all"></i>
                </a>
            </div>

            <!-- Botón para alternar formulario tradicional -->
            <div class="mt-6 pt-5 border-t border-slate-700/60 text-center">
                <button type="button" @click="showManual = !showManual" class="text-xs text-slate-400 hover:text-indigo-400 font-semibold transition-colors flex items-center justify-center gap-1.5 mx-auto">
                    <span>O iniciar sesión con usuario y contraseña</span>
                    <i class="fa-solid fa-chevron-down text-[10px] transition-transform" :class="{ 'rotate-180': showManual }"></i>
                </button>
            </div>

            <!-- Formulario manual colapsable -->
            <form x-show="showManual" x-cloak method="POST" action="{{ route('login.post') }}" class="mt-5 space-y-4 pt-4 border-t border-slate-700/40 animate-fade-in">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-1.5">Usuario o Correo</label>
                    <input type="text" name="login" required placeholder="emanuel o carlos" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-1.5">Contraseña</label>
                    <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500">
                </div>

                <button type="submit" class="w-full py-3 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-sm shadow-lg shadow-indigo-600/30 transition-all active:scale-95">
                    Entrar al Sistema
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="text-center text-xs text-slate-500 mt-6">
            Desarrollado para Emanuel & Prof. Carlos Angulo &bull; {{ date('Y') }}
        </p>
    </div>

</body>
</html>
