<x-app-layout>
<style>
	[x-cloak] { display: none !important; }
	.section-title { font-size:1.1rem; font-weight:800; background:linear-gradient(135deg, #3B82F6 0%, #2563EB 100%); display:inline-block; padding:.6rem 1.5rem; margin-bottom:1.5rem; border-radius:1rem; box-shadow:0 4px 6px rgba(59,130,246,.2); color:#fff; text-transform:uppercase; letter-spacing:0.05em; }
	.field-label { display:block; font-size:.75rem; font-weight:700; margin-bottom:.5rem; color:#64748B; text-transform:uppercase; letter-spacing:0.05em; }
	.cs-input { width:100%; border:1px solid #E2E8F0; border-radius:1rem; padding:.75rem 1rem; box-shadow:0 1px 3px rgba(0,0,0,.05); outline:none; transition:all .2s; background:#fff; }
	.cs-input:focus { border-color:#3B82F6; box-shadow:0 0 0 3px rgba(59,130,246,.1); }
	.cs-trigger { width:100%; display:flex; align-items:center; justify-content:space-between; padding:.75rem 1rem; background:#fff; border:1px solid #E2E8F0; border-radius:1rem; box-shadow:0 1px 3px rgba(0,0,0,.05); cursor:pointer; transition:all .2s; text-align:left; font-size:.95rem; }
	.cs-trigger:hover { border-color:#93C5FD; background:#F8FAFC; }
	.cs-trigger-active { border-color:#3B82F6; box-shadow:0 0 0 3px rgba(59,130,246,.1); border-bottom-left-radius:0; border-bottom-right-radius:0; background:#EFF6FF; }
	.cs-arrow { width:1.25rem; height:1.25rem; color:#94A3B8; transition:transform .3s cubic-bezier(.4,0,.2,1); flex-shrink:0; }
	.cs-list { position:absolute; top:100%; left:0; right:0; z-index:50; background:#fff; border:1px solid #3B82F6; border-top:none; border-bottom-left-radius:1rem; border-bottom-right-radius:1rem; box-shadow:0 10px 25px rgba(59,130,246,.15); max-height:0; overflow:hidden; opacity:0; transform:translateY(-4px); transition:max-height .35s cubic-bezier(.4,0,.2,1),opacity .25s ease,transform .25s ease; }
	.cs-list-open { max-height:300px; opacity:1; transform:translateY(0); overflow-y:auto; }
	.cs-option { padding:.7rem 1rem; cursor:pointer; transition:background .15s; font-size:.95rem; border-bottom:1px solid #F1F5F9; }
	.cs-option:last-child { border-bottom:none; }
	.cs-option:hover { background:#EFF6FF; color:#2563EB; font-weight:600; }
	.risk-btn { display:flex; flex-direction:column; align-items:center; gap:2px; padding:.4rem .6rem; border:2px solid #E2E8F0; border-radius:.75rem; cursor:pointer; transition:all .2s; min-width:3.5rem; text-align:center; background:#fff; }
	.risk-btn:hover { border-color:#93C5FD; background:#F8FAFC; }
</style>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50">
	<main class="max-w-5xl mx-auto py-10 px-6">
		<!-- Header -->
		<div class="mb-8">
			@if(session('error'))
			<div class="mb-6 bg-red-50 border-2 border-red-200 text-red-700 px-6 py-4 rounded-2xl">
				<div class="flex items-center gap-3">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
					</svg>
					<span class="font-bold">{{ session('error') }}</span>
				</div>
			</div>
			@endif

			@if(session('success'))
			<div class="mb-6 bg-green-50 border-2 border-green-200 text-green-700 px-6 py-4 rounded-2xl">
				<div class="flex items-center gap-3">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
					</svg>
					<span class="font-bold">{{ session('success') }}</span>
				</div>
			</div>
			@endif

			<div class="flex items-center gap-3 mb-3">
				<div class="bg-blue-100 p-2 rounded-xl">
					<svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
					</svg>
				</div>
				<h1 class="text-3xl font-black text-gray-800 tracking-tight">Evaluación de Riesgos en el Hogar</h1>
			</div>
			<p class="text-sm text-gray-600 ml-14">Complete todos los campos para obtener un análisis detallado de los riesgos en su vivienda</p>
		</div>
		
		<form id="inspection-form" action="{{ route('survey.store') }}" method="POST" class="bg-white shadow-2xl rounded-[2.5rem] p-8 border border-blue-100" x-data="formData()" @submit.prevent="submitForm()">
            @csrf
			<input type="hidden" name="inspector_nombre" :value="userName" />
			<input type="hidden" name="inspector_email" :value="userEmail" />

			<!-- ===== SECTION 1: Registro ===== -->
			<div class="mb-10 pb-8 border-b border-blue-100">
				<h2 class="section-title">1. Registro</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
					<div>
						<label class="field-label">1.1 Tipo de Vivienda</label>
						<input type="hidden" name="tipo_vivienda" x-model="tipoVivienda" />
						<div class="relative">
							<button type="button" @click="toggleDd('tipoVivienda')" class="cs-trigger" :class="openDd==='tipoVivienda'&&'cs-trigger-active'">
								<span x-text="tipoViviendaLabel" :class="!tipoVivienda&&'text-gray-400'"></span>
								<svg class="cs-arrow" :class="openDd==='tipoVivienda'&&'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
							</button>
							<div class="cs-list" :class="openDd==='tipoVivienda'?'cs-list-open':''">
								<template x-for="o in [{v:'Propia'},{v:'Alquilada'},{v:'Otras'}]"><div class="cs-option" @click="sel('tipoVivienda',o.v,o.v)" x-text="o.v"></div></template>
							</div>
						</div>
					</div>
					<div>
						<label class="field-label">1.2 Plantas</label>
						<input type="hidden" name="plantas" x-model="plantas" />
						<div class="relative">
							<button type="button" @click="toggleDd('plantas')" class="cs-trigger" :class="openDd==='plantas'&&'cs-trigger-active'">
								<span x-text="plantasLabel" :class="!plantas&&'text-gray-400'"></span>
								<svg class="cs-arrow" :class="openDd==='plantas'&&'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
							</button>
							<div class="cs-list" :class="openDd==='plantas'?'cs-list-open':''">
								<template x-for="n in [1,2,3,4,5,6]"><div class="cs-option" @click="sel('plantas',String(n),String(n))" x-text="n"></div></template>
							</div>
						</div>
					</div>
					<div>
						<label class="field-label">1.3 Zona de construcción</label>
						<input type="hidden" name="zona_construccion" x-model="zonaConstruccion" />
						<div class="relative">
							<button type="button" @click="toggleDd('zonaConstruccion')" class="cs-trigger" :class="openDd==='zonaConstruccion'&&'cs-trigger-active'">
								<span x-text="zonaConstruccionLabel" :class="!zonaConstruccion&&'text-gray-400'"></span>
								<svg class="cs-arrow" :class="openDd==='zonaConstruccion'&&'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
							</button>
							<div class="cs-list" :class="openDd==='zonaConstruccion'?'cs-list-open':''">
								<template x-for="o in [{v:'Urbana'},{v:'Rural'}]"><div class="cs-option" @click="sel('zonaConstruccion',o.v,o.v)" x-text="o.v"></div></template>
							</div>
						</div>
					</div>
					<div>
						<label class="field-label">1.4 Fecha</label>
						<input type="text" name="fecha" :value="new Date().toLocaleDateString('es-PE')" readonly class="cs-input bg-gray-50 text-gray-500 cursor-not-allowed"/>
					</div>
					<div>
						<label class="field-label">1.5 País</label>
						<input type="text" name="pais" x-model="pais" required class="cs-input" placeholder="Ej: Perú" @input="checkPeru()"/>
					</div>
					<div :class="!isPeru?'opacity-50':''">
						<label class="field-label">1.6 Región</label>
						<input type="text" name="region" x-model="region" class="cs-input" :required="isPeru" :disabled="!isPeru" placeholder="Ej: Lima"/>
					</div>
					<div :class="!isPeru?'opacity-50':''">
						<label class="field-label">1.7 Provincia</label>
						<input type="text" name="provincia" x-model="provincia" class="cs-input" :required="isPeru" :disabled="!isPeru" placeholder="Ej: Lima"/>
					</div>
					<div>
						<label class="field-label">1.8 Grado de estudios concluida</label>
						<input type="hidden" name="grado_estudios" x-model="gradoEstudios" />
						<div class="relative">
							<button type="button" @click="toggleDd('gradoEstudios')" class="cs-trigger" :class="openDd==='gradoEstudios'&&'cs-trigger-active'">
								<span x-text="gradoEstudiosLabel" :class="!gradoEstudios&&'text-gray-400'"></span>
								<svg class="cs-arrow" :class="openDd==='gradoEstudios'&&'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
							</button>
							<div class="cs-list" :class="openDd==='gradoEstudios'?'cs-list-open':''">
								<template x-for="o in [{v:'Inicial'},{v:'Primaria'},{v:'Superior técnica'},{v:'Superior universitaria'},{v:'Ninguna'}]"><div class="cs-option" @click="sel('gradoEstudios',o.v,o.v)" x-text="o.v"></div></template>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ===== SECTION 2: Autoevaluación ===== -->
			<div class="mb-10 pb-8 border-b border-blue-100">
				<h2 class="section-title">2. Autoevaluación</h2>
				<p class="text-sm text-gray-600 mb-6 bg-blue-50 p-4 rounded-xl border border-blue-100">
					<strong class="text-blue-700">Instrucciones:</strong> Responda cada pregunta con: 
					<span class="inline-flex items-center gap-1 ml-2">
						<span class="px-2 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-bold">0 = No existe</span>
						<span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-xs font-bold">1 = Leve</span>
						<span class="px-2 py-1 bg-orange-100 text-orange-700 rounded-lg text-xs font-bold">2 = Moderado</span>
						<span class="px-2 py-1 bg-red-100 text-red-700 rounded-lg text-xs font-bold">3 = Alto</span>
					</span>
				</p>

				<template x-for="(sec, si) in sections" :key="si">
					<div class="mb-8 bg-gradient-to-br from-gray-50 to-white p-6 rounded-2xl border border-gray-200 shadow-sm">
						<div class="flex items-center gap-3 mb-4">
							<h3 class="text-lg font-black text-gray-800" x-text="'2.'+(si+1)+' '+sec.title"></h3>
							<span class="text-xs font-black px-3 py-1.5 rounded-full" :class="sectionScore(si)>sec.threshold?'bg-red-100 text-red-700 border border-red-200':'bg-green-100 text-green-700 border border-green-200'" x-text="'Puntaje: '+sectionScore(si)+'/'+sec.questions.length*3"></span>
						</div>
						<div class="space-y-3">
							<template x-for="(q, qi) in sec.questions" :key="qi">
								<div class="bg-white p-4 rounded-xl border border-gray-200 flex flex-col md:flex-row md:items-center gap-3 hover:border-blue-300 transition-colors">
									<p class="flex-1 text-sm font-medium text-gray-700" x-text="'2.'+(si+1)+'.'+(qi+1)+' '+q"></p>
									<div class="relative shrink-0 w-52">
										<button type="button" @click="openRiskDd = openRiskDd===si+'_'+qi ? null : si+'_'+qi" class="cs-trigger text-sm" :class="openRiskDd===si+'_'+qi&&'cs-trigger-active'">
											<span class="truncate" x-text="answers[si][qi]<0?'Seleccione...':riskOptions[answers[si][qi]].l" :class="answers[si][qi]<0?'text-gray-400':riskLabelColors[answers[si][qi]]"></span>
											<svg class="cs-arrow" :class="openRiskDd===si+'_'+qi&&'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
										</button>
										<div class="cs-list" :class="openRiskDd===si+'_'+qi?'cs-list-open':''">
											<template x-for="opt in riskOptions" :key="opt.v">
												<div class="cs-option flex items-center gap-2" @click="answers[si][qi]=opt.v; openRiskDd=null">
													<span class="w-2 h-2 rounded-full shrink-0" :class="riskDotColors[opt.v]"></span>
													<span x-text="opt.l"></span>
												</div>
											</template>
										</div>
									</div>
								</div>
							</template>
						</div>
						<div class="mt-4 p-4 rounded-xl text-sm font-bold border-2" :class="sectionScore(si)>sec.threshold?'bg-red-50 text-red-700 border-red-200':'bg-green-50 text-green-700 border-green-200'">
							<span x-text="'Resultado: '+sectionScore(si)+' puntos — '+(sectionScore(si)>sec.threshold?sec.warning:'Nivel aceptable')"></span>
						</div>
					</div>
				</template>
			</div>

			<!-- ===== SECTION 3: Interpretación Final ===== -->
			<div class="mb-10">
				<h2 class="section-title">3. Interpretación Final</h2>
				<div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-[2rem] border-2 border-blue-200 shadow-lg space-y-4">
					<div class="text-center">
						<p class="text-6xl font-black mb-2" :class="totalColor" x-text="totalScore()"></p>
						<p class="text-xl font-black mb-1" :class="totalColor" x-text="riskLevel()"></p>
						<p class="text-sm text-gray-600 font-medium mt-2" x-text="riskDiagnosis()"></p>
					</div>
					<div class="grid grid-cols-4 gap-3 text-center text-xs mt-6">
						<div class="p-3 rounded-xl border-2 transition-all" :class="totalScore()<=20?'bg-green-100 border-green-300 font-black scale-105':'bg-green-50 border-green-200'">
							<div class="text-2xl font-black text-green-600 mb-1">0-20</div>
							<div class="font-bold text-green-700">Bajo</div>
						</div>
						<div class="p-3 rounded-xl border-2 transition-all" :class="totalScore()>20&&totalScore()<=40?'bg-yellow-100 border-yellow-300 font-black scale-105':'bg-yellow-50 border-yellow-200'">
							<div class="text-2xl font-black text-yellow-600 mb-1">21-40</div>
							<div class="font-bold text-yellow-700">Moderado</div>
						</div>
						<div class="p-3 rounded-xl border-2 transition-all" :class="totalScore()>40&&totalScore()<=70?'bg-orange-100 border-orange-300 font-black scale-105':'bg-orange-50 border-orange-200'">
							<div class="text-2xl font-black text-orange-600 mb-1">41-70</div>
							<div class="font-bold text-orange-700">Alto</div>
						</div>
						<div class="p-3 rounded-xl border-2 transition-all" :class="totalScore()>70?'bg-red-100 border-red-300 font-black scale-105':'bg-red-50 border-red-200'">
							<div class="text-2xl font-black text-red-600 mb-1">71-105</div>
							<div class="font-bold text-red-700">Crítico</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Hidden fields para enviar scores -->
			<template x-for="(sec, si) in sections" :key="'h'+si">
				<input type="hidden" :name="'score_'+sec.key" :value="sectionScore(si)"/>
			</template>
			<input type="hidden" name="score_total" :value="totalScore()"/>
			<input type="hidden" name="nivel_riesgo" :value="riskLevel()"/>
			<input type="hidden" name="respuestas_json" :value="JSON.stringify(answers)"/>

			<div class="text-center mt-12">
				<button type="submit" class="bg-gradient-to-r from-blue-600 to-blue-500 text-white px-12 py-4 rounded-full font-black text-xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 w-full md:w-auto">
					<span class="flex items-center justify-center gap-3">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
						</svg>
						Guardar Inspección
					</span>
				</button>
			</div>
		</form>
	</main>
</div>

<script>
window.formData = function() {
	return {
		userName: '{{ Auth::user()->name }}',
		userEmail: '{{ Auth::user()->email }}',

		// Section 1
		tipoVivienda:'', tipoViviendaLabel:'Seleccione...',
		plantas:'', plantasLabel:'Seleccione...',
		gradoEstudios:'', gradoEstudiosLabel:'Seleccione...',
		zonaConstruccion:'', zonaConstruccionLabel:'Seleccione...',
		pais:'',
		region:'',
		provincia:'',
		isPeru: false,
		openDd: null,
		openRiskDd: null,
		toggleDd(n) { this.openDd = this.openDd===n ? null : n; },
		sel(f,v,l) { this[f]=v; this[f+'Label']=l; this.openDd=null; },
		checkPeru() {
			const paisLower = this.pais.toLowerCase().trim();
			this.isPeru = paisLower === 'perú' || paisLower === 'peru';
			if (!this.isPeru) {
				this.region = '';
				this.provincia = '';
			}
		},

		// Section 2 - Risk options
		riskOptions: [
			{v:0,l:'No existe el riesgo'},{v:1,l:'Riesgo leve'},{v:2,l:'Riesgo moderado'},{v:3,l:'Riesgo alto'}
		],
		riskLabelColors: {
			0:'text-green-700', 1:'text-yellow-600', 2:'text-orange-600', 3:'text-red-600'
		},
		riskDotColors: {
			0:'bg-green-500', 1:'bg-yellow-500', 2:'bg-orange-500', 3:'bg-red-500'
		},
		sections: [
			{ key:'electrico', title:'Riesgos Eléctricos', threshold:9, warning:'Riesgo serio de incendio.',
			  questions:['¿Existen cables expuestos, pelados o deteriorados?','¿Usas extensiones o "zapatillas" sobrecargadas?','¿El tablero eléctrico es antiguo o no tiene llaves térmicas?','¿Hay enchufes cerca de zonas húmedas sin protección?','¿Notas chispazos o calentamiento en tomacorrientes?'] },
			{ key:'incendio', title:'Riesgo de Incendio / Gas', threshold:8, warning:'Hogar vulnerable.',
			  questions:['¿La manguera de gas tiene más de 5 años?','¿El balón está en un lugar sin ventilación?','¿Cocinas cerca de materiales inflamables?','¿No tienes extintor o detector de humo?','¿Dejas la cocina encendida sin supervisión?'] },
			{ key:'caidas', title:'Riesgos de Caídas', threshold:7, warning:'Alta probabilidad de accidentes.',
			  questions:['¿Tus pisos son resbalosos?','¿El baño no tiene alfombra antideslizante?','¿Las escaleras carecen de barandas firmes?','¿Hay objetos que obstaculizan el paso?','¿La iluminación es deficiente en la noche?'] },
			{ key:'humedad', title:'Humedad, moho y aire', threshold:6, warning:'Ambiente no saludable.',
			  questions:['¿Observas manchas de moho?','¿Hay filtraciones o goteras?','¿Ventilas poco la casa?','¿Percibes olor constante a humedad?','¿La ropa tarda demasiado en secar dentro de casa?'] },
			{ key:'estructural', title:'Riesgo Estructural', threshold:6, warning:'Evaluación técnica recomendable.',
			  questions:['¿La vivienda presenta grietas visibles?','¿Has construido sin asesoría técnica?','¿Hay columnas debilitadas o expuestas?','¿El techo muestra hundimientos?','¿Tienes objetos pesados mal fijados?'] },
			{ key:'salud', title:'Riesgos para la Salud', threshold:7, warning:'Riesgo sanitario alto.',
			  questions:['¿Almacenas productos químicos sin control?','¿Medicamentos al alcance de niños?','¿Basura acumulada?','¿Presencia de plagas?','¿Agua almacenada sin tapa?'] },
			{ key:'infantil', title:'Seguridad Infantil', threshold:5, warning:'Hogar no seguro para menores.',
			  questions:['¿Enchufes sin protectores?','¿Ventanas sin seguro?','¿Objetos pequeños accesibles?','¿Cocina accesible para niños?','¿Escaleras sin barrera?'] }
		],
		answers: Array.from({length:7}, (_,i) => Array.from({length:5}, ()=>-1)),

		sectionScore(i) { return this.answers[i].reduce((a,b)=>a+(b<0?0:b), 0); },
		totalScore() { return this.answers.flat().reduce((a,b)=>a+(b<0?0:b), 0); },
		get totalColor() {
			const t=this.totalScore();
			if(t<=20) return 'text-green-600'; if(t<=40) return 'text-yellow-600';
			if(t<=70) return 'text-orange-600'; return 'text-red-600';
		},
		riskLevel() {
			const t=this.totalScore();
			if(t<=20) return 'Bajo'; if(t<=40) return 'Moderado';
			if(t<=70) return 'Alto'; return 'Crítico';
		},
		riskDiagnosis() {
			const t=this.totalScore();
			if(t<=20) return 'Vivienda segura'; if(t<=40) return 'Mejoras recomendadas';
			if(t<=70) return 'Riesgos importantes'; return 'Intervención urgente';
		},
		submitForm() {
			const hasEmpty = this.answers.flat().some(a => a < 0);
			if(hasEmpty) { 
				alert('Por favor, responda todas las preguntas de la autoevaluación.'); 
				return; 
			}
			
			console.log('Enviando formulario...');
			console.log('Datos:', {
				userName: this.userName,
				userEmail: this.userEmail,
				tipoVivienda: this.tipoVivienda,
				plantas: this.plantas,
				totalScore: this.totalScore(),
				nivel_riesgo: this.riskLevel()
			});
			
			const form = document.getElementById('inspection-form');
			form.submit();
		}
	};
};
</script>
</x-app-layout>
