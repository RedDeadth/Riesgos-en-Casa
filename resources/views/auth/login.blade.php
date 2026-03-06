<x-guest-layout>
    <main class="min-h-screen flex" x-data="authApp()">
        
        <!-- ===== LADO IZQUIERDO - Branding ===== -->
        <div class="hidden lg:flex lg:w-[48%] relative overflow-hidden flex-col justify-between p-10" style="background: linear-gradient(135deg, #1e3a5f 0%, #1a365d 30%, #1e293b 100%);">
            <!-- Decoración de fondo -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-600 rounded-full blur-3xl"></div>
                <div class="absolute top-1/2 left-1/2 w-48 h-48 bg-cyan-400 rounded-full blur-2xl"></div>
            </div>

            <!-- Contenido -->
            <div class="relative z-10">
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-16">
                    <div class="w-11 h-11 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center border border-white/20">
                        <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <span class="text-white/90 font-semibold text-lg">Autoevaluación Riesgos en Casa</span>
                </div>

                <!-- Badge -->
                <div class="inline-block bg-white/10 backdrop-blur-sm text-white/80 text-sm font-medium px-4 py-1.5 rounded-full border border-white/10 mb-6">
                    Plataforma Profesional
                </div>

                <!-- Título Principal -->
                <h1 class="text-4xl xl:text-5xl font-extrabold text-white leading-tight mb-6">
                    Autoevaluación de<br/>Riesgos en Casa
                </h1>
                <p class="text-blue-200/80 text-base leading-relaxed max-w-md mb-12">
                    Evalúa los riesgos de tu vivienda de forma integral: eléctricos, incendios, caídas, humedad, estructurales, salud y seguridad infantil.
                </p>

                <!-- Features -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-blue-400/20">
                            <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Métricas Detalladas</p>
                            <p class="text-white text-xs mt-0.5">Análisis completo por categoría</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-emerald-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-emerald-400/20">
                            <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Evaluación Integral</p>
                            <p class="text-white text-xs mt-0.5">7 categorías de riesgo</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-purple-400/20">
                            <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Seguimiento Continuo</p>
                            <p class="text-white text-xs mt-0.5">Monitorea tu progreso</p>
                        </div>
                    </div>

                    
                </div>
            </div>

            <!-- Footer -->
            <div class="relative z-10">
                <p class="text-blue-200/40 text-xs">© 2025 Autoevaluación Riesgos en Casa</p>
            </div>
        </div>

        <!-- DERECHO - Login Form -->
        <div class="w-full lg:w-[52%] flex flex-col justify-center p-6 md:p-12 lg:p-16 xl:p-24 bg-gray-50/80 relative">
            
            <!-- Background Grid -->
            <div class="absolute inset-0 opacity-40 pointer-events-none" 
                 style="background-image: linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px); background-size: 24px 24px;"></div>
            
            <div class="w-full max-w-md mx-auto relative z-10">
                
                <!-- Header (Mobil Only) -->
                <div class="lg:hidden text-center mb-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg border border-blue-400/30">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h2 class="text-2xl font-extrabold text-gray-900">Acceso Admin</h2>
                </div>

                <div class="auth-card">
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900">Iniciar Sesión</h3>
                        <p class="text-sm text-gray-500 mt-1">Ingresa tus credenciales para continuar</p>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <!-- Correo Electrónico -->
                        <div>
                            <label for="email" class="auth-label text-gray-700 block text-sm font-medium mb-1">Correo Electrónico</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                                       class="auth-input pl-11 !w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm" placeholder="tucorreo@ejemplo.com" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Contraseña -->
                        <div>
                            <div class="flex items-center justify-between mb-0.5">
                                <label for="password" class="auth-label text-gray-700 block text-sm font-medium !mb-0">Contraseña</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500 transition-colors">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>
                            
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                </div>
                                
                                <input id="password" :type="showPass ? 'text' : 'password'" name="password" required autocomplete="current-password" 
                                       class="auth-input pl-11 pr-11 !w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm" placeholder="••••••••" />
                                
                                <!-- Toggle Password Visiblity -->
                                <button type="button" @click="showPass = !showPass" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 outline-none">
                                    <svg x-show="!showPass" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    <svg x-show="showPass" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700 cursor-pointer">Mantener sesión iniciada</label>
                        </div>

                        <!-- Botón de Envío -->
                        <div class="mt-6">
                            <button type="submit" class="btn-primary w-full shadow-lg shadow-blue-500/20 group py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex justify-center items-center">
                                Iniciar Sesión
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Enlace a Registro (Solo si está habilitado) -->
                @if (Route::has('register'))
                    <p class="mt-8 text-center text-sm text-gray-500">
                        ¿No tienes una cuenta? 
                        <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Regístrate</a>
                    </p>
                @endif
                
                <div class="mt-8 text-center">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Volver a inicio
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script>
        window.authApp = function() {
            return {
                showPass: false
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        .auth-card {
            background: white;
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
    </style>
</x-guest-layout>
