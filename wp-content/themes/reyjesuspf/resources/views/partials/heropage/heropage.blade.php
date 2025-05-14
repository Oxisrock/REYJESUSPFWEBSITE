{{-- HERO SECTION 1 --}}
<section class="relative bg-gray-700 text-white py-20 md:py-32">
    {{-- Imagen de Fondo --}}
    <div class="absolute inset-0">
        <img src="https://placehold.co/1920x1080/4A5568/E2E8F0/png?text=Iglesia+Fondo+1" alt="Fondo de comunidad cristiana" class="w-full h-full object-cover">
        {{-- Overlay para legibilidad del texto --}}
        <div class="absolute inset-0 bg-gray-800 opacity-60"></div>
    </div>

    {{-- Contenido --}}
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 leading-tight">
            Descubre un refugio de<br class="hidden md:inline"> esperanza y fe en Cristo
        </h1>
        <p class="text-lg sm:text-xl mb-10 max-w-2xl mx-auto">
            Únete a nuestra comunidad cristiana y recibe palabras de aliento, enseñanzas bíblicas y guía espiritual directamente en tu correo.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="#" class="bg-white text-gray-900 font-semibold px-8 py-3 rounded-md text-lg hover:bg-gray-200 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                Registrarme
            </a>
            <a href="#" class="bg-transparent border border-white text-white font-semibold px-8 py-3 rounded-md text-lg hover:bg-white hover:text-gray-900 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                Conocer más
            </a>
        </div>
    </div>
</section>

{{-- HERO SECTION 2 (Formulario) --}}
<section class="relative bg-gray-700 py-16 md:py-24">
    {{-- Imagen de Fondo (diferente o la misma con diferente posicionamiento) --}}
    <div class="absolute inset-0">
        <img src="https://placehold.co/1920x1080/5A6678/CBD5E0/png?text=Iglesia+Fondo+2" alt="Fondo para formulario de fe" class="w-full h-full object-cover">
        {{-- Overlay para legibilidad del texto --}}
        <div class="absolute inset-0 bg-gray-800 opacity-75"></div>
    </div>

    {{-- Contenido --}}
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="max-w-xl mx-auto text-center bg-gray-800 bg-opacity-50 p-8 md:p-10 rounded-lg shadow-xl">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Únete a Nuestra Familia</h2>
            <p class="text-gray-300 mb-8">
                Da el primer paso en tu camino de fe. Regístrate hoy y forma parte de una comunidad que te acompaña y te inspira.
            </p>
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="nombre-completo" class="sr-only">Nombre Completo</label>
                    <input
                        type="text"
                        name="nombre-completo"
                        id="nombre-completo"
                        required
                        class="w-full bg-gray-700 bg-opacity-70 border border-gray-600 text-white placeholder-gray-400 px-5 py-3 rounded-md text-base focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                        placeholder="Nombre Completo" />
                </div>
                <div>
                    <label for="email-familia" class="sr-only">Enter your email</label>
                    <input
                        type="email"
                        name="email-familia"
                        id="email-familia"
                        required
                        class="w-full bg-gray-700 bg-opacity-70 border border-gray-600 text-white placeholder-gray-400 px-5 py-3 rounded-md text-base focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                        placeholder="Enter your email" />
                </div>
                <div>
                    <button
                        type="submit"
                        class="w-full bg-white text-gray-900 font-semibold px-8 py-3 rounded-md text-lg hover:bg-gray-200 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        Registrarme
                    </button>
                </div>
            </form>
            <p class="text-xs text-gray-400 mt-6">
                Al hacer clic en Registrarme, confirma que está de acuerdo con nuestros
                <a href="#" class="underline hover:text-gray-200">Términos y condiciones</a>.
            </p>
        </div>
    </div>
</section>