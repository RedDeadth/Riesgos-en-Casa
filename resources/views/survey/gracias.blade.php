<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gracias - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<style>
	[x-cloak] { display: none !important; }
</style>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 flex flex-col">
	<!-- Navigation -->
	<nav class="bg-white/80 backdrop-blur-md border-b border-blue-100 shadow-sm">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between h-16">
				<div class="flex items-center">
					<a href="{{ route('home') }}" class="flex items-center gap-3 group">
						<div class="bg-gradient-to-br from-blue-600 to-blue-400 p-2 rounded-xl shadow-sm group-hover:rotate-3 transition-transform">
							<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
							</svg>
						</div>
						<span class="hidden md:block text-lg font-black tracking-tight text-gray-800">
							RIESGOS<span class="text-blue-600">CASA</span>
						</span>
					</a>
				</div>

				<div class="flex items-center gap-6">
					@if(Auth::user()->is_admin)
					<a href="{{ route('dashboard') }}" class="hidden sm:flex items-center gap-2 px-4 py-2 text-sm font-bold text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded-xl transition-all">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
						</svg>
						Panel Admin
					</a>
					@endif

					<!-- Dropdown -->
					<div class="relative" x-data="{ open: false }">
						<button @click="open = !open" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-bold rounded-xl text-gray-700 bg-gray-50 hover:bg-white hover:shadow-sm transition ease-in-out duration-150">
							<div class="w-7 h-7 rounded-full bg-blue-100 flex items-center justify-center text-xs text-blue-700 mr-2 border border-blue-200 font-black">
								{{ substr(Auth::user()->name, 0, 1) }}
							</div>
							<span class="hidden sm:block">{{ Auth::user()->name }}</span>
							<svg class="ms-2 h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
							</svg>
						</button>

						<div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 rounded-xl shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden" style="display: none;">
							<div class="px-4 py-3 border-b border-gray-100 bg-gray-50">
								<p class="text-xs font-bold text-gray-400 uppercase">Usuario</p>
								<p class="text-xs font-medium truncate text-gray-700">{{ Auth::user()->email }}</p>
							</div>
							<a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 font-medium transition-colors flex items-center gap-2">
								<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
								</svg>
								Mi Perfil
							</a>
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<button type="submit" class="w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-red-50 font-bold transition-colors flex items-center gap-2">
									<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
									</svg>
									Cerrar Sesión
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Main Content - Centrado vertical y horizontal -->
	<main class="flex-1 flex items-center justify-center px-6 py-8">
		<div class="max-w-4xl w-full">
			<div class="bg-white shadow-2xl rounded-[2.5rem] p-12 border border-blue-100 text-center">
				<div class="mb-8">
					<div class="w-28 h-28 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg shadow-green-200">
						<svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
						</svg>
					</div>
					<h2 class="text-4xl font-black text-gray-900 mb-4">¡Evaluación Completada!</h2>
					<p class="text-lg text-gray-600 mb-2 font-medium">Tu inspección ha sido guardada exitosamente</p>
					<p class="text-sm text-gray-500">Gracias por utilizar nuestra herramienta de evaluación de riesgos</p>
				</div>

				<div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
					<a href="{{ route('home') }}" style="background: linear-gradient(to right, #4B5563, #6B7280); color: white;" class="px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center block">
						Volver al Inicio
					</a>
					
					<a href="{{ route('survey.index') }}" style="background: linear-gradient(to right, #2563EB, #3B82F6); color: white;" class="px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center block">
						Nueva Encuesta
					</a>
					
					@if(Auth::user()->is_admin)
					<a href="{{ route('dashboard') }}" style="background: linear-gradient(to right, #4F46E5, #6366F1); color: white;" class="px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center block">
						Ver Dashboard
					</a>
					@endif
				</div>
			</div>
		</div>
	</main>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
