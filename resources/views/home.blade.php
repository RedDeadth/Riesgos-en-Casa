<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Welcome Section -->
        <div class="mb-12">
            <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-200/40 border border-blue-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-blue-400 px-8 py-10 relative overflow-hidden">
                    <div class="absolute right-0 top-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="bg-white/20 p-2 rounded-xl backdrop-blur-sm">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                </svg>
                            </div>
                            <h1 class="text-sm font-black text-white/80 uppercase tracking-widest">Bienvenido</h1>
                        </div>
                        <h2 class="text-4xl font-black text-white mb-2">{{ Auth::user()->name }}</h2>
                        <p class="text-blue-100 text-sm font-medium">Gestiona la seguridad de tu hogar con nuestra herramienta de evaluación de riesgos</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Card -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Action -->
            <div class="lg:col-span-2">
                <a href="{{ route('survey.index') }}" class="block group">
                    <div class="bg-gradient-to-br from-blue-600 to-blue-500 rounded-[2.5rem] p-10 shadow-2xl shadow-blue-500/30 hover:shadow-blue-500/50 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute right-0 bottom-0 w-96 h-96 bg-white/5 rounded-full blur-3xl -mr-32 -mb-32"></div>
                        <div class="relative z-10">
                            <div class="flex items-start justify-between mb-6">
                                <div>
                                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-4">
                                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                                        <span class="text-xs font-black text-white uppercase tracking-wider">Disponible</span>
                                    </div>
                                    <h3 class="text-3xl font-black text-white mb-3">Realizar Encuesta</h3>
                                    <p class="text-blue-100 text-sm font-medium leading-relaxed max-w-md">
                                        Evalúa los riesgos en tu vivienda con nuestro cuestionario completo. Identifica áreas de mejora y recibe recomendaciones personalizadas.
                                    </p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm p-4 rounded-2xl group-hover:scale-110 transition-transform">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 text-white font-bold">
                                <span class="text-sm">Comenzar ahora</span>
                                <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Info Cards -->
            <div class="space-y-6">
                <div class="bg-white rounded-[2rem] p-6 shadow-lg shadow-gray-200/60 border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-green-100 p-3 rounded-xl">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-black text-gray-400 uppercase">Evaluación</p>
                            <p class="text-lg font-black text-gray-800">Rápida y Fácil</p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 leading-relaxed">Completa la encuesta en menos de 10 minutos y obtén resultados inmediatos.</p>
                </div>

                <div class="bg-white rounded-[2rem] p-6 shadow-lg shadow-gray-200/60 border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-blue-100 p-3 rounded-xl">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-black text-gray-400 uppercase">Análisis</p>
                            <p class="text-lg font-black text-gray-800">Detallado</p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 leading-relaxed">Recibe un análisis completo de 7 categorías de riesgo en tu hogar.</p>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="bg-amber-100 w-12 h-12 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Riesgos Eléctricos</h4>
                <p class="text-sm text-gray-600">Identifica problemas con cables, enchufes y sistemas eléctricos.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="bg-red-100 w-12 h-12 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Riesgo de Incendio</h4>
                <p class="text-sm text-gray-600">Evalúa sistemas de gas, materiales inflamables y prevención.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="bg-purple-100 w-12 h-12 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Riesgo Estructural</h4>
                <p class="text-sm text-gray-600">Detecta problemas en la estructura y construcción de tu hogar.</p>
            </div>
        </div>
    </div>
</x-app-layout>
