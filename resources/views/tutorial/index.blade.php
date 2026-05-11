<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            📖 Guía Técnica para el Desarrollo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow mb-6 border-l-4 border-indigo-500">
                <p class="text-gray-700">
                    Esta sección sirve como referencia rápida para entender la arquitectura del boilerplate que estamos utilizando en clase.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
                    <h3 class="font-bold text-lg mb-2 text-blue-700">1. El Modelo (Models)</h3>
                    <p class="text-gray-600 text-sm mb-4">Ubicación: <code class="bg-gray-100 p-1 text-red-600">app/Models/</code></p>
                    <p class="text-sm">Representa la tabla de la base de datos. Aquí definimos las relaciones y los campos que se pueden cargar masivamente (fillable).</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-green-500">
                    <h3 class="font-bold text-lg mb-2 text-green-700">2. El Controlador (Controllers)</h3>
                    <p class="text-gray-600 text-sm mb-4">Ubicación: <code class="bg-gray-100 p-1 text-red-600">app/Http/Controllers/</code></p>
                    <p class="text-sm">Contiene la lógica. Recibe la petición, procesa los datos y devuelve una respuesta (generalmente una vista).</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-purple-500">
                    <h3 class="font-bold text-lg mb-2 text-purple-700">3. La Vista (Views + Blade)</h3>
                    <p class="text-gray-600 text-sm mb-4">Ubicación: <code class="bg-gray-100 p-1 text-red-600">resources/views/</code></p>
                    <p class="text-sm">Interfaz de usuario. Utilizamos <strong>Blade</strong> para la lógica de visualización y <strong>Tailwind</strong> para el diseño.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold text-lg mb-2 text-red-700">4. Las Rutas (Routes)</h3>
                    <p class="text-gray-600 text-sm mb-4">Ubicación: <code class="bg-gray-100 p-1 text-red-600">routes/web.php</code></p>
                    <p class="text-sm">Define las URLs del sistema. Es el primer punto de entrada de cualquier solicitud del navegador.</p>
                </div>

            </div>

            <div class="mt-8 bg-indigo-900 text-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">🔐 Sistema de Seguridad (Spatie)</h3>
                <p class="mb-4 opacity-90 text-sm">
                    Para controlar qué ve cada usuario en las vistas, usamos las siguientes directivas de Blade:
                </p>
                <ul class="list-disc ml-6 space-y-3 text-sm">
                    <li>
                        <code class="bg-indigo-800 px-2 py-1 rounded text-yellow-300">@@role('Administrador')</code> 
                        <span class="opacity-80">-> Se usa para verificar si el usuario tiene un cargo específico.</span>
                    </li>
                    <li>
                        <code class="bg-indigo-800 px-2 py-1 rounded text-yellow-300">@@can('editar_usuarios')</code> 
                        <span class="opacity-80">-> Es la forma recomendada. Verifica si el usuario tiene el "permiso" para realizar la acción.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>