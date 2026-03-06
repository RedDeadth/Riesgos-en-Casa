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
							<p class="text-blue-200/60 text-xs mt-0.5">Análisis completo por categoría</p>
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
							<p class="text-blue-200/60 text-xs mt-0.5">7 categorías de riesgo</p>
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
							<p class="text-blue-200/60 text-xs mt-0.5">Monitorea tu progreso</p>
						</div>
					</div>

					<div class="flex items-start gap-3">
						<div class="w-10 h-10 bg-amber-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-amber-400/20">
							<svg class="w-5 h-5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
							</svg>
						</div>
						<div>
							<p class="text-white font-semibold text-sm">Plan de Mejora</p>
							<p class="text-blue-200/60 text-xs mt-0.5">Recomendaciones personalizadas</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<div class="relative z-10">
				<p class="text-blue-200/40 text-xs">© 2025 Autoevaluación Riesgos en Casa</p>
			</div>
		</div>

		<!-- LADO DERECHO - Register Form -->
		<div class="w-full lg:w-[52%] flex flex-col justify-center p-6 md:p-12 lg:p-16 xl:p-24 bg-gray-50/80 relative">
			<!-- Background Grid -->
			<div class="absolute inset-0 opacity-40 pointer-events-none" 
				style="background-image: linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px); background-size: 24px 24px;">
			</div>

			<div class="w-full max-w-md mx-auto relative z-10">
				<!-- Header (Mobile Only) -->
				<div class="lg:hidden text-center mb-10">
					<div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg border border-teal-400/30">
						<svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
					</div>
					<h2 class="text-2xl font-extrabold text-gray-900">Registro Admin</h2>
				</div>

				<div class="auth-card">
					<div class="mb-8">
						<h3 class="text-2xl font-bold text-gray-900">Crear Cuenta</h3>
						<p class="text-sm text-gray-500 mt-1">Completa los datos para registrarte</p>
					</div>

					<!-- Error Alert -->
					<div x-show="errorMsg" x-transition class="mb-6 p-4 rounded-xl bg-red-50/80 border border-red-100 flex items-start gap-3" x-cloak>
						<svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
						<p class="text-sm font-medium text-red-800" x-text="errorMsg"></p>
					</div>

					<form method="POST" action="{{ route('register') }}" class="space-y-4" @submit="validateRegister">
						@csrf

						<!-- Name -->
						<div>
							<label for="name" class="auth-label">Nombre Completo</label>
							<div class="relative">
								<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
									<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
								</div>
								<input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" 
									class="auth-input pl-11 !w-full" placeholder="Juan Pérez" />
							</div>
							<x-input-error :messages="$errors->get('name')" class="mt-2" />
						</div>

						<!-- Email Address -->
						<div>
							<label for="email" class="auth-label">Correo Electrónico</label>
							<div class="relative">
								<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
									<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
								</div>
								<input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" 
									class="auth-input pl-11 !w-full" placeholder="tucorreo@ejemplo.com" />
							</div>
							<x-input-error :messages="$errors->get('email')" class="mt-2" />
						</div>

						<!-- Contraseñas Grid -->
						<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
							<!-- Password -->
							<div>
								<label for="password" class="auth-label">Contraseña</label>
								<div class="relative">
									<input id="password" :type="showPass ? 'text' : 'password'" name="password" required autocomplete="new-password" 
										class="auth-input pl-4 pr-10 !w-full" placeholder="••••••••" x-model="regPassword" />
									
									<button type="button" @click="showPass = !showPass" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 outline-none">
										<svg x-show="!showPass" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
										<svg x-show="showPass" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
									</button>
								</div>
								<x-input-error :messages="$errors->get('password')" class="mt-2" />
							</div>

							<!-- Confirm Password -->
							<div>
								<label for="password_confirmation" class="auth-label">Confirmar Contraseña</label>
								<div class="relative">
									<input id="password_confirmation" :type="showPass ? 'text' : 'password'" name="password_confirmation" required autocomplete="new-password" 
										class="auth-input pl-4 pr-4 !w-full" placeholder="••••••••" x-model="regPasswordConfirm" />
								</div>
								<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
							</div>
						</div>

						<div class="pt-2">
							<!-- Botón de Envío -->
							<button type="submit" class="btn-success w-full shadow-lg shadow-emerald-500/20 group">
								Registrarme
								<svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
							</button>
						</div>
					</form>

					<!-- Enlace a Login -->
					<div class="mt-6 text-center text-sm text-gray-500">
						¿Ya tienes una cuenta?
						<a href="{{ route('login') }}" class="font-medium text-emerald-600 hover:text-emerald-500 transition-colors">Inicia sesión</a>
					</div>
				</div>
				
				<!-- Footer/Back -->
				<div class="mt-8 text-center">
					<a href="{{ url('/') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-500 hover:text-gray-900 transition-colors">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
						Volver al inicio
					</a>
				</div>
			</div>
		</div>
	</main>

<script>
	window.authApp = function() {
		return {
			showPass: false,
			regPassword: '',
			regPasswordConfirm: '',
			errorMsg: '',
			
			validateRegister(e) {
				if (this.regPassword.length < 8) {
					e.preventDefault();
					this.errorMsg = 'La contraseña debe tener al menos 8 caracteres';
					return;
				}
				if (this.regPassword !== this.regPasswordConfirm) {
					e.preventDefault();
					this.errorMsg = 'Las contraseñas no coinciden';
					return;
				}
			}
		};
	};
</script>

<style>
	[x-cloak] { display: none !important; }

	.auth-card {
		background: white;
		border-radius: 1.5rem;
		padding: 2.5rem;
		box-shadow: 
			0 0 0 1px rgba(0, 0, 0, 0.03),
			0 4px 6px -1px rgba(0, 0, 0, 0.05),
			0 20px 25px -5px rgba(0, 0, 0, 0.08),
			0 0 60px -15px rgba(16, 185, 129, 0.08); /* Emerald shadow */
	}

	.auth-label {
		display: block;
		font-size: 0.875rem;
		font-weight: 600;
		color: #374151;
		margin-bottom: 0.375rem;
	}

	.auth-input {
		width: 100%;
		border: 1px solid #d1d5db;
		border-radius: 0.75rem;
		padding-top: 0.625rem;
		padding-bottom: 0.625rem;
		font-size: 0.95rem;
		outline: none;
		transition: all 0.2s;
		background: white;
		box-sizing: border-box;
	}
	.auth-input:focus {
		border-color: #10b981;
		box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
	}
	.auth-input::placeholder {
		color: #9ca3af;
	}

	.btn-success {
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 0.75rem 1.5rem;
		background: linear-gradient(135deg, #10b981 0%, #059669 100%);
		color: white;
		font-weight: 600;
		font-size: 0.95rem;
		border-radius: 0.75rem;
		border: none;
		cursor: pointer;
		transition: all 0.2s;
	}
	.btn-success:hover {
		background: linear-gradient(135deg, #059669 0%, #047857 100%);
		transform: translateY(-1px);
	}
</style>
</x-guest-layout>
