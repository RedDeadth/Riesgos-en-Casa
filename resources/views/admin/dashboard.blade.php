<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">Últimas Evaluaciones Registradas</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Fecha</th>
                                    <th class="py-2 px-4 border-b">Inspector</th>
                                    <th class="py-2 px-4 border-b">Vivienda</th>
                                    <th class="py-2 px-4 border-b">Score Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($inspecciones as $inspeccion)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-2 px-4 border-b">{{ $inspeccion->id }}</td>
                                        <td class="py-2 px-4 border-b">{{ $inspeccion->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="py-2 px-4 border-b">{{ $inspeccion->inspector_nombre ?? 'N/A' }}</td>
                                        <td class="py-2 px-4 border-b">{{ $inspeccion->tipo_vivienda ?? 'N/A' }}</td>
                                        <td class="py-2 px-4 border-b font-bold">{{ $inspeccion->score_total }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-4 px-4 text-center text-gray-500">No hay evaluaciones registradas aún.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
