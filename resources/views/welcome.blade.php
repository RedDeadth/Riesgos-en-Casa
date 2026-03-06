<x-guest-layout>
<main class="min-h-screen flex" x-data="authApp()">
<!-- ===== LADO IZQUIERDO - Branding ===== -->
<div class="hidden lg:flex lg:w-[48%] relative overflow-hidden flex-col justify-between p-10" 
style="background: linear-gradient(135deg, #1e3a5f 0%, #1a365d 30%, #1e293b 100%);">

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
<svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
</div>
<span class="text-white/90 font-semibold text-lg">Autoevaluación Riesgos en Casa</span>
</div>

<!-- Badge -->
<div class="inline-block bg-white/10 backdrop-blur-sm text-white/80 text-sm font-medium px-4 py-1.5 rounded-full border border-white/10 mb-6">
al
cipal -->
font-extrabold text-white leading-tight mb-6">
 de<br/>Riesgos en Casa
leading-relaxed max-w-md mb-12">
de tu vivienda de forma integral: eléctricos, incendios, caídas, humedad, estructurales, salud y seguridad infantil.
gap-4">
gap-3">
bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-blue-400/20">
text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
t-semibold text-sm">Métricas Detalladas</p>
mt-0.5">Análisis completo por categoría</p>
gap-3">
bg-emerald-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-emerald-400/20">
text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
t-semibold text-sm">Evaluación Integral</p>
mt-0.5">7 categorías de riesgo</p>
gap-3">
bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-purple-400/20">
text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
t-semibold text-sm">Seguimiento Continuo</p>
mt-0.5">Monitorea tu progreso</p>
gap-3">
bg-amber-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-amber-400/20">
text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
t-semibold text-sm">Plan de Mejora</p>
mt-0.5">Recomendaciones personalizadas</p>
-->
class="text-blue-200/40 text-xs">© 2026 Autoevaluación Riesgos en Casa</p>
LADO DERECHO - Formularios ===== -->
flex items-center justify-center p-6 md:p-10 bg-gray-50/80 relative">
sutil -->
set-0 opacity-40" 
d-image: linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px); background-size: 24px 24px;">
w-full max-w-md">

LANDING (default) ============ -->
tView === 'landing'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
decorativa superior -->
left-0 right-0 h-1 rounded-t-2xl" 
d: linear-gradient(90deg, #3b82f6, #06b6d4, #10b981);"></div>
t-extrabold text-gray-900 text-center mb-2">Acceder a la Plataforma</h2>
text-sm text-center mb-8">Comienza tu evaluación de riesgos</p>

 @click="currentView = 'login'" class="btn-primary w-full mb-4">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
a Inspección
>

 @click="currentView = 'register'" class="btn-outline w-full">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
 Inspector Nuevo
>

border-t border-gray-100">
') }}" class="w-full text-center text-xs text-gray-400 hover:text-gray-600 transition flex items-center justify-center gap-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md py-1">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
istrador (Protegido)
VISTA: INICIO RAPIDO / LOGIN FALSO ============ -->
tView === 'login'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
 @click="currentView = 'landing'" class="flex items-center gap-1 text-sm text-gray-400 hover:text-gray-600 transition mb-6">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
>
class="absolute top-0 left-0 right-0 h-1 rounded-t-2xl bg-blue-500"></div>
bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-5 mx-auto shadow-sm">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
t-extrabold text-gray-900 text-center mb-1">Cargar Datos de Inspector</h2>
text-sm text-center mb-8">Empieza a llenar encuestas de inmediato</p>

="{{ route('survey.index') }}" method="GET" class="space-y-5">
ombre del Inspector</label>
put type="text" name="name" required placeholder="Ingresa tu nombre" class="auth-input" />
 type="submit" class="btn-primary w-full">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
Encuesta Rápida
>
VISTA: REGISTRO FALSO ============ -->
tView === 'register'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-cloak>
 @click="currentView = 'landing'" class="flex items-center gap-1 text-sm text-gray-400 hover:text-gray-600 transition mb-6">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
>
class="absolute top-0 left-0 right-0 h-1 rounded-t-2xl" style="background: linear-gradient(90deg, #3b82f6, #10b981);"></div>
bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-5 mx-auto shadow-sm">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
t-extrabold text-gray-900 text-center mb-1">Nuevo Inspector</h2>
text-sm text-center mb-6">No requieres cuenta, solo empieza a llenarlas</p>

="{{ route('survey.index') }}" method="GET" class="space-y-4">
ombre Completo</label>
put type="text" name="name" required placeholder="Ingresa tu nombre completo" class="auth-input" />
 type="submit" class="btn-success w-full">
fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
zar Ahora
>
branding -->
 text-center mt-8">
text-xs">© 2026 Autoevaluación Riesgos en Casa</p>
>

<script>
window.authApp = function() {
 {
tView: 'landing',
{ display: none !important; }

.auth-card {
d: white;
g: 2.5rem;
0 1px rgba(0, 0, 0, 0.03),
-1px rgba(0, 0, 0, 0.05),
-5px rgba(0, 0, 0, 0.08),
-15px rgba(59, 130, 246, 0.08);
rgba(0, 0, 0, 0.04);
}

.auth-label {
t-size: 0.875rem;
t-weight: 600;
-bottom: 0.5rem;
}

.auth-input {
solid #e5e7eb;
g: 0.75rem 1rem;
t-size: 0.95rem;
e: none;
sition: all 0.2s;
d: #f9fafb;
g: border-box;
}
.auth-input:focus {
d: white;
0 3px rgba(59, 130, 246, 0.1);
}
.auth-input::placeholder {
-primary {
-items: center;
tent: center;
g: 0.875rem 1.5rem;
d: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
t-weight: 700;
t-size: 0.95rem;
one;
ter;
sition: all 0.2s;
12px rgba(59, 130, 246, 0.3);
}
.btn-primary:hover {
d: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
20px rgba(59, 130, 246, 0.4);
sform: translateY(-1px);
}

.btn-outline {
-items: center;
tent: center;
g: 0.875rem 1.5rem;
d: white;
t-weight: 700;
t-size: 0.95rem;
solid #3b82f6;
ter;
sition: all 0.2s;
}
.btn-outline:hover {
d: #eff6ff;
sform: translateY(-1px);
}

.btn-success {
-items: center;
tent: center;
g: 0.875rem 1.5rem;
d: linear-gradient(135deg, #10b981 0%, #059669 100%);
t-weight: 700;
t-size: 0.95rem;
one;
ter;
sition: all 0.2s;
12px rgba(16, 185, 129, 0.3);
}
.btn-success:hover {
d: linear-gradient(135deg, #059669 0%, #047857 100%);
20px rgba(16, 185, 129, 0.4);
sform: translateY(-1px);
}

.btn-dark {
-items: center;
tent: center;
g: 0.875rem 1.5rem;
d: linear-gradient(135deg, #374151 0%, #1f2937 100%);
t-weight: 700;
t-size: 0.95rem;
one;
ter;
sition: all 0.2s;
12px rgba(0, 0, 0, 0.2);
}
.btn-dark:hover {
d: linear-gradient(135deg, #1f2937 0%, #111827 100%);
20px rgba(0, 0, 0, 0.3);
sform: translateY(-1px);
}
</style>
</x-guest-layout>
