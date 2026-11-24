<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Acceso Seguro - Deberes Emmanuel</title>
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
<body class="h-full flex items-center justify-center p-4 bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950 text-slate-100 antialiased" x-data="{ selectedUser: 'Emmanuel', showPass: false }">

    <div class="max-w-md w-full my-auto">
        <!-- Logo y Encabezado -->
        <div class="text-center mb-6">
            <div class="inline-flex w-16 h-16 rounded-2xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 items-center justify-center text-white text-2xl shadow-xl shadow-indigo-500/30 mb-3">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">Deberes Emmanuel</h1>
            <p class="text-xs sm:text-sm text-slate-400 mt-1 font-medium">Portal Protegido &bull; Matemática y Computación</p>
        </div>

        <!-- Alertas -->
        @if(session('error') || $errors->any())
            <div class="bg-rose-500/20 border border-rose-500/40 text-rose-300 px-4 py-3 rounded-2xl mb-4 text-xs font-semibold flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation text-base flex-shrink-0"></i>
                <span>{{ session('error') ?? $errors->first() }}</span>
            </div>
        @endif

        @if(session('success'))
            <div class="bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 px-4 py-3 rounded-2xl mb-4 text-xs font-semibold flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-base flex-shrink-0"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Tarjeta de Login Seguro -->
        <div class="bg-slate-800/70 backdrop-blur-xl border border-slate-700/60 rounded-3xl p-6 sm:p-8 shadow-2xl shadow-black/40">
            
            <!-- Selector Visual de Perfil -->
            <div class="grid grid-cols-2 gap-2 p-1.5 bg-slate-900/80 rounded-2xl mb-6 border border-slate-700/50">
                <button type="button" @click="selectedUser = 'Emmanuel'; document.getElementById('loginInput').value = 'Emmanuel'" :class="{ 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-md': selectedUser === 'Emmanuel', 'text-slate-400 hover:text-white': selectedUser !== 'Emmanuel' }" class="py-2.5 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Emmanuel</span>
                </button>
                <button type="button" @click="selectedUser = 'carlos'; document.getElementById('loginInput').value = 'carlos'" :class="{ 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md': selectedUser === 'carlos', 'text-slate-400 hover:text-white': selectedUser !== 'carlos' }" class="py-2.5 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>Profesor</span>
                </button>
            </div>

            <!-- Formulario de Autenticación -->
            <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-1.5">Usuario o Correo</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500">
                            <i class="fa-solid fa-user text-xs"></i>
                        </span>
                        <input type="text" name="login" id="loginInput" value="{{ old('login', 'Emmanuel') }}" required class="w-full pl-10 pr-4 py-3 rounded-xl bg-slate-900/90 border border-slate-700 text-white placeholder-slate-500 text-sm font-semibold focus:outline-none focus:border-indigo-500 transition-colors">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-1.5">Contraseña</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500">
                            <i class="fa-solid fa-lock text-xs"></i>
                        </span>
                        <input :type="showPass ? 'text' : 'password'" name="password" required placeholder="Ingresa tu contraseña" class="w-full pl-10 pr-10 py-3 rounded-xl bg-slate-900/90 border border-slate-700 text-white placeholder-slate-500 text-sm font-semibold focus:outline-none focus:border-indigo-500 transition-colors">
                        <button type="button" @click="showPass = !showPass" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-500 hover:text-slate-300">
                            <i class="fa-solid" :class="showPass ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs text-slate-400 pt-1">
                    <label class="flex items-center gap-2 cursor-pointer hover:text-slate-300">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-slate-700 bg-slate-900 text-indigo-600 focus:ring-0 cursor-pointer" checked>
                        <span>Recordar sesión</span>
                    </label>
                    <span class="text-[11px] text-indigo-400 flex items-center gap-1">
                        <i class="fa-solid fa-shield-check"></i> Seguro
                    </span>
                </div>

                <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 via-indigo-500 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-extrabold text-sm shadow-xl shadow-indigo-600/30 transition-all active:scale-95 flex items-center justify-center gap-2">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    <span>Iniciar Sesión</span>
                </button>
            </form>

            <div class="mt-6 pt-4 border-t border-slate-700/60 text-center">
                <p class="text-[11px] text-slate-400">
                    <i class="fa-solid fa-lock text-amber-400 mr-1"></i>
                    Las notas y retroalimentaciones están protegidas con acceso individual.
                </p>
            </div>
        </div>

        <!-- Footer -->
        <p class="text-center text-xs text-slate-500 mt-6">
            &copy; {{ date('Y') }} Deberes Emmanuel &bull; Prof. Carlos Angulo
        </p>
    </div>

</body>
</html>

