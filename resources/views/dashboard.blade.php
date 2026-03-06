<x-app-layout>
<div x-data="dashboardData()" class="min-h-screen bg-[#f3f4f6]" x-cloak>
    <!-- Loading State -->
    <div x-show="loading" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-white">
        <div class="w-16 h-16 border-4 border-blue-200 border-t-blue-600 rounded-full animate-spin mb-4"></div>
        <p class="text-gray-600 font-medium animate-pulse">Cargando panel de control...</p>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" x-show="!loading" x-transition>
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 pb-5 border-b border-gray-200/60">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Panel de Control</h1>
                <p class="text-gray-500 mt-1">Resumen general de inspecciones de riesgos en casa</p>
            </div>
            <div class="mt-4 md:mt-0 flex gap-3 h-10">
                <button @click="window.location.reload()" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-all">
                    <svg class="h-4 w-4 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Actualizar
                </button>
                <a href="{{ route('survey.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Nueva Inspección
                </a>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Inspecciones -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Total Inspecciones</p>
                        <h3 class="text-3xl font-bold text-gray-900" x-text="stats.total">0</h3>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-2 flex items-center text-sm">
                    <span class="text-gray-500">Evaluaciones completadas</span>
                </div>
            </div>

            <!-- Riesgo Crítico -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Riesgo Crítico</p>
                        <h3 class="text-3xl font-bold text-red-600" x-text="stats.critico">0</h3>
                    </div>
                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-2 flex items-center text-sm">
                    <span class="text-red-600 font-medium">Requieren atención urgente</span>
                </div>
            </div>

            <!-- Puntuación Media -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Puntuación Media</p>
                        <h3 class="text-3xl font-bold text-gray-900" x-text="stats.avgScore">0</h3>
                    </div>
                    <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-2 flex items-center text-sm">
                    <span class="text-gray-500">Sobre 105 puntos posibles</span>
                </div>
            </div>

            <!-- Distribución -->
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all">
                <div class="flex flex-col h-full justify-between">
                    <p class="text-sm font-medium text-gray-500 mb-2">Distribución (B - M - A - C)</p>
                    <div class="flex gap-2 h-20 mt-auto items-end">
                        <!-- Bajo -->
                        <div class="flex-1 bg-green-100 rounded-t-lg relative group flex items-end justify-center" :style="`height: ${stats.total > 0 ? Math.max((stats.bajo / stats.total) * 100, 10) : 10}%`">
                            <span class="absolute -top-6 text-xs font-bold text-green-700 opacity-0 group-hover:opacity-100 transition-opacity" x-text="stats.bajo"></span>
                            <div class="w-full bg-green-500 rounded-t-lg" style="height: 100%;"></div>
                        </div>
                        <!-- Moderado -->
                        <div class="flex-1 bg-yellow-100 rounded-t-lg relative group flex items-end justify-center" :style="`height: ${stats.total > 0 ? Math.max((stats.moderado / stats.total) * 100, 10) : 10}%`">
                            <span class="absolute -top-6 text-xs font-bold text-yellow-700 opacity-0 group-hover:opacity-100 transition-opacity" x-text="stats.moderado"></span>
                            <div class="w-full bg-yellow-500 rounded-t-lg" style="height: 100%;"></div>
                        </div>
                        <!-- Alto -->
                        <div class="flex-1 bg-orange-100 rounded-t-lg relative group flex items-end justify-center" :style="`height: ${stats.total > 0 ? Math.max((stats.alto / stats.total) * 100, 10) : 10}%`">
                            <span class="absolute -top-6 text-xs font-bold text-orange-700 opacity-0 group-hover:opacity-100 transition-opacity" x-text="stats.alto"></span>
                            <div class="w-full bg-orange-500 rounded-t-lg" style="height: 100%;"></div>
                        </div>
                        <!-- Crítico -->
                        <div class="flex-1 bg-red-100 rounded-t-lg relative group flex items-end justify-center" :style="`height: ${stats.total > 0 ? Math.max((stats.critico / stats.total) * 100, 10) : 10}%`">
                            <span class="absolute -top-6 text-xs font-bold text-red-700 opacity-0 group-hover:opacity-100 transition-opacity" x-text="stats.critico"></span>
                            <div class="w-full bg-red-500 rounded-t-lg" style="height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <!-- Table Header -->
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50/50 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                    Listado de Inspecciones
                </h2>
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" x-model="search" placeholder="Buscar por inspector o ubicación..." 
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition-shadow">
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Fecha</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Inspector</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Ubicación</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Vivienda</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Puntuación</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Nivel de Riesgo</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Empty State -->
                        <tr x-show="filtered().length === 0" x-cloak>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                <svg class="mx-auto h-12 w-12 text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                </svg>
                                No se encontraron inspecciones que coincidan con la búsqueda.
                            </td>
                        </tr>

                        <!-- Data Rows -->
                        <template x-for="item in filtered()" :key="item.id">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" x-text="new Date(item.created_at).toLocaleDateString('es-ES', {day:'2-digit', month:'short', year:'numeric'})"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-bold text-xs mr-3" x-text="(item.inspector_nombre || 'A').charAt(0).toUpperCase()"></div>
                                        <span class="text-sm font-medium text-gray-900" x-text="item.inspector_nombre || 'Anónimo'"></span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <span x-text="item.pais || '-'"></span>
                                        <span x-show="item.provincia" x-text="', ' + item.provincia"></span>
                                        <span x-show="item.region" x-text="', ' + item.region"></span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-medium rounded-md bg-gray-100 text-gray-800" x-text="item.tipo_vivienda || '-'"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="text-sm font-bold text-gray-900" x-text="item.score_total"></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full" 
                                        :class="lvlClass(item.nivel_riesgo)" 
                                        x-text="item.nivel_riesgo"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button @click="viewDetails(item)" class="text-blue-600 hover:text-blue-900 bg-blue-50 px-3 py-1.5 rounded-md transition-colors inline-flex items-center gap-1">
                                        Ver detalles
                                    </button>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>

            <!-- Pagination footer -->
            <div class="px-6 py-3 border-t border-gray-200 flex items-center justify-between">
                <span class="text-sm text-gray-500">
                    Mostrando <span class="font-medium text-gray-900" x-text="filtered().length"></span> de <span class="font-medium text-gray-900" x-text="stats.total"></span> resultados
                </span>
            </div>
        </div>
    </div>

    <!-- Modal de Detalles -->
    <div x-show="exp !== null" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Overlay -->
            <div x-show="exp !== null" 
                 x-transition:enter="ease-out duration-300" 
                 x-transition:enter-start="opacity-0" 
                 x-transition:enter-end="opacity-100"
                 class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity" 
                 @click="exp = null"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

            <!-- Modal Panel -->
            <div x-show="exp !== null"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                
                <div class="flex flex-col max-h-[90vh]">
                    <!-- Header -->
                    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between bg-gradient-to-r from-blue-50 to-white sticky top-0 z-10">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Detalles de Inspección</h3>
                            <p class="text-sm text-gray-500 mt-1" x-text="exp ? `ID: #${exp.id} | ${new Date(exp.created_at).toLocaleDateString('es-ES', {day:'2-digit', month:'long', year:'numeric'})}` : ''"></p>
                        </div>
                        <button @click="exp = null" class="bg-white rounded-full p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 transition-colors border border-gray-200 shadow-sm">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="p-6 overflow-y-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Información del Inspector -->
                            <div>
                                <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4 pb-2 border-b border-gray-200">Información General</h4>
                                <dl class="space-y-3">
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <dt class="text-xs font-medium text-gray-500">Inspector</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-semibold" x-text="exp ? exp.inspector_nombre : ''"></dd>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <dt class="text-xs font-medium text-gray-500">Email</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-semibold" x-text="exp ? exp.inspector_email : ''"></dd>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <dt class="text-xs font-medium text-gray-500">Ubicación</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-semibold" x-text="exp ? `${exp.pais || '-'}${exp.provincia ? ', ' + exp.provincia : ''}${exp.region ? ', ' + exp.region : ''}` : ''"></dd>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <dt class="text-xs font-medium text-gray-500">Tipo de Vivienda</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-semibold" x-text="exp ? `${exp.tipo_vivienda || '-'} (${exp.plantas || '-'} plantas)` : ''"></dd>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <dt class="text-xs font-medium text-gray-500">Zona / Grado de Estudios</dt>
                                        <dd class="mt-1 text-sm text-gray-900 font-semibold" x-text="exp ? `${exp.zona_construccion || '-'} / ${exp.grado_estudios || '-'}` : ''"></dd>
                                    </div>
                                </dl>
                            </div>

                            <!-- Resultado Global -->
                            <div>
                                <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4 pb-2 border-b border-gray-200">Resultado Global</h4>
                                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-6 border-2 border-gray-200 text-center">
                                    <div class="text-6xl font-black mb-3" 
                                         :class="exp ? (exp.nivel_riesgo === 'Bajo' ? 'text-green-600' : exp.nivel_riesgo === 'Moderado' ? 'text-yellow-600' : exp.nivel_riesgo === 'Alto' ? 'text-orange-600' : 'text-red-600') : ''" 
                                         x-text="exp ? exp.score_total : '0'"></div>
                                    <div class="text-sm text-gray-500 font-medium mb-4">Puntuación Total / 105</div>
                                    <div class="inline-flex px-4 py-2 rounded-full font-bold uppercase tracking-wide text-sm" 
                                         :class="exp ? (exp.nivel_riesgo === 'Bajo' ? 'bg-green-100 text-green-700' : exp.nivel_riesgo === 'Moderado' ? 'bg-yellow-100 text-yellow-700' : exp.nivel_riesgo === 'Alto' ? 'bg-orange-100 text-orange-700' : 'bg-red-100 text-red-700') : ''" 
                                         x-text="exp ? exp.nivel_riesgo : ''"></div>
                                </div>

                                <!-- Desglose Rápido -->
                                <div class="mt-4 grid grid-cols-2 gap-2">
                                    <div class="bg-blue-50 rounded-lg p-3 text-center border border-blue-100">
                                        <div class="text-xs text-blue-600 font-medium mb-1">Eléctrico</div>
                                        <div class="text-lg font-bold text-blue-700" x-text="exp ? exp.score_electrico : '0'"></div>
                                    </div>
                                    <div class="bg-red-50 rounded-lg p-3 text-center border border-red-100">
                                        <div class="text-xs text-red-600 font-medium mb-1">Incendio</div>
                                        <div class="text-lg font-bold text-red-700" x-text="exp ? exp.score_incendio : '0'"></div>
                                    </div>
                                    <div class="bg-orange-50 rounded-lg p-3 text-center border border-orange-100">
                                        <div class="text-xs text-orange-600 font-medium mb-1">Caídas</div>
                                        <div class="text-lg font-bold text-orange-700" x-text="exp ? exp.score_caidas : '0'"></div>
                                    </div>
                                    <div class="bg-cyan-50 rounded-lg p-3 text-center border border-cyan-100">
                                        <div class="text-xs text-cyan-600 font-medium mb-1">Humedad</div>
                                        <div class="text-lg font-bold text-cyan-700" x-text="exp ? exp.score_humedad : '0'"></div>
                                    </div>
                                    <div class="bg-purple-50 rounded-lg p-3 text-center border border-purple-100">
                                        <div class="text-xs text-purple-600 font-medium mb-1">Estructural</div>
                                        <div class="text-lg font-bold text-purple-700" x-text="exp ? exp.score_estructural : '0'"></div>
                                    </div>
                                    <div class="bg-green-50 rounded-lg p-3 text-center border border-green-100">
                                        <div class="text-xs text-green-600 font-medium mb-1">Salud</div>
                                        <div class="text-lg font-bold text-green-700" x-text="exp ? exp.score_salud : '0'"></div>
                                    </div>
                                    <div class="bg-pink-50 rounded-lg p-3 text-center border border-pink-100 col-span-2">
                                        <div class="text-xs text-pink-600 font-medium mb-1">Seguridad Infantil</div>
                                        <div class="text-lg font-bold text-pink-700" x-text="exp ? exp.score_infantil : '0'"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex justify-end">
                        <button type="button" 
                                class="inline-flex justify-center rounded-lg border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 transition-colors" 
                                @click="exp = null">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
window.dashboardData = function() {
    return {
        loading: true, 
        search: '', 
        exp: null,
        stats: {total:0, bajo:0, moderado:0, alto:0, critico:0, avgScore:0}, 
        data: [],
        
        async init() {
            console.log('Dashboard: Iniciando carga de datos...');
            try {
                console.log('Dashboard: Haciendo fetch a /api/inspections');
                const res = await fetch('/api/inspections');
                console.log('Dashboard: Respuesta recibida, status:', res.status);
                
                if (res.status === 401 || res.status === 403) { 
                    console.error('Dashboard: No autorizado, redirigiendo a login');
                    window.location.href = '/login';
                    return; 
                }
                
                if(res.ok) {
                    const d = await res.json(); 
                    console.log('Dashboard: Datos recibidos:', d);
                    
                    if (d.stats && d.inspecciones) {
                        console.log('Dashboard: Usando datos del servidor');
                        this.stats = d.stats; 
                        this.data = d.inspecciones;
                        console.log('Dashboard: Stats:', this.stats);
                        console.log('Dashboard: Total inspecciones:', this.data.length);
                    } else {
                        console.log('Dashboard: Procesando datos con fallback');
                        this.processDataFallback(d);
                    }
                } else {
                    console.error('Dashboard: Error en respuesta:', res.status, res.statusText);
                }
            } catch(e) { 
                console.error("Dashboard: Error fetching inspections:", e); 
            } finally {
                console.log('Dashboard: Finalizando carga, loading = false');
                this.loading = false;
            }
        },
        
        processDataFallback(inspections) {
            this.data = inspections || [];
            
            let t = this.data.length, b = 0, m = 0, a = 0, c = 0, sum = 0;
            this.data.forEach(x => {
                if(x.nivel_riesgo === 'Bajo') b++;
                else if(x.nivel_riesgo === 'Moderado') m++;
                else if(x.nivel_riesgo === 'Alto') a++;
                else c++;
                sum += Number(x.score_total) || 0;
            });
            
            this.stats = {
                total: t, bajo: b, moderado: m, alto: a, critico: c,
                avgScore: t > 0 ? Math.round(sum / t) : 0
            };
        },
        
        filtered() { 
            if(!this.search) return this.data; 
            const s = this.search.toLowerCase(); 
            return this.data.filter(r => 
                `${r.inspector_nombre||''} ${r.provincia||''} ${r.pais||''} ${r.tipo_vivienda||''}`.toLowerCase().includes(s)
            ); 
        },
        
        viewDetails(item) {
            this.exp = item;
        },
        
        lvlClass(n) { 
            return n === 'Bajo' ? 'bg-green-100 text-green-700' : 
                   n === 'Moderado' ? 'bg-yellow-100 text-yellow-700' : 
                   n === 'Alto' ? 'bg-orange-100 text-orange-700' : 
                   'bg-red-100 text-red-700 border-red-200 border'; 
        }
    };
};
</script>

<style>
[x-cloak] { display: none !important; }
</style>
</x-app-layout>
