<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h1 class="text-3xl font-bold mb-4">Autoevaluación de Riesgos en Casa</h1>
                    <p class="mb-6">Por favor, complete el siguiente formulario para evaluar los riesgos de su vivienda. <br> 
                    *Nota: Esta es una vista generada automáticamente como parte de la estructura. 
                    El formulario completo de Astro debe ser migrado aquí.*</p>

                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('survey.store') }}" method="POST" class="max-w-xl mx-auto text-left">
                        @csrf
                        <div class="mb-4">
                            <label for="inspector_nombre" class="block text-sm font-medium text-gray-700">Nombre del Inspector</label>
                            <input type="text" name="inspector_nombre" id="inspector_nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="inspector_email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="inspector_email" id="inspector_email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        
                        <div class="mt-6">
                            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
                                Enviar Autoevaluación
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
