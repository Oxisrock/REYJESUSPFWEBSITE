<footer class="bg-gray-700 text-gray-300 pt-12 pb-8">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    {{-- Sección Superior del Footer: Newsletter, Mapa del Sitio, Unirme, Síguenos --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
      
      {{-- Columna 1: Newsletter --}}
      <div class="md:col-span-2 lg:col-span-1">
        <h3 class="text-xl font-semibold text-white mb-2">Regístrate en nuestro Newsletter y conéctate con la Fe Cada Semana.</h3>
        <p class="text-sm mb-4">Recibe inspiración, noticias y mensajes edificantes directamente en tu correo. ¡Suscríbete a nuestro newsletter hoy!</p>
        <form action="#" method="POST" class="flex flex-col sm:flex-row sm:items-center gap-2">
          <label for="footer-email" class="sr-only">Enter your email</label>
          <input
            type="email"
            name="footer-email"
            id="footer-email"
            class="w-full sm:flex-grow bg-gray-600 border border-gray-500 text-white placeholder-gray-400 px-4 py-3 rounded-md text-sm focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
            placeholder="Enter your email"
          />
          <button
            type="submit"
            class="bg-white text-gray-800 px-6 py-3 rounded-md text-sm font-semibold hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-700 focus:ring-white shrink-0"
          >
            Suscribirme
          </button>
        </form>
        <p class="text-xs mt-3 text-gray-400">
          Al suscribirte automáticamente estas aceptando los
          <a href="#" class="underline hover:text-white">Términos y condiciones</a>.
        </p>
      </div>

      {{-- Columna 2: Mapa del Sitio --}}
      <div>
        <h4 class="text-base font-semibold text-white mb-3">Mapa del sitio</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-white hover:underline">Inicio</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Nosotros</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Eventos</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Pastora</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Iglesia</a></li>
        </ul>
      </div>

      {{-- Columna 3: Unirme --}}
      <div>
        <h4 class="text-base font-semibold text-white mb-3">Unirme</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-white hover:underline">Sembrar</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Contacto</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Iniciar Sesión</a></li>
          <li><a href="#" class="hover:text-white hover:underline">Registrarme</a></li>
        </ul>
      </div>

      {{-- Columna 4: Síguenos --}}
      <div>
        <h4 class="text-base font-semibold text-white mb-3">Síguenos</h4>
        <ul class="space-y-3 text-sm">
          <li>
            <a href="#" class="flex items-center hover:text-white group">
              <svg class="w-5 h-5 mr-2 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
              </svg>
              Facebook
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center hover:text-white group">
              <svg class="w-5 h-5 mr-2 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.028 2.528c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zm0 1.62c-2.403 0-2.729.01-3.686.053-.936.042-1.538.195-2.09.398a3.272 3.272 0 00-1.158.764 3.272 3.272 0 00-.764 1.158c-.203.552-.356 1.154-.398 2.09-.042.957-.053 1.283-.053 3.686s.01 2.729.053 3.686c.042.936.195 1.538.398 2.09a3.272 3.272 0 00.764 1.158 3.272 3.272 0 001.158.764c.552.203 1.154.356 2.09.398.957.042 1.283.053 3.686.053s2.729-.01 3.686-.053c.936-.042 1.538-.195 2.09-.398a3.272 3.272 0 001.158-.764 3.272 3.272 0 00.764-1.158c.203-.552.356-1.154-.398-2.09.042-.957.053-1.283.053-3.686s-.01-2.729-.053-3.686c-.042-.936-.195-1.538-.398-2.09a3.272 3.272 0 00-.764-1.158 3.272 3.272 0 00-1.158-.764c-.552-.203-1.154-.356-2.09-.398C15.044 3.63 14.718 3.62 12.315 3.62zM12 6.865A5.135 5.135 0 1012 17.135 5.135 5.135 0 0012 6.865zm0 8.65A3.515 3.515 0 1112 8.485a3.515 3.515 0 010 7.03zm6.225-8.995a1.2 1.2 0 100 2.399 1.2 1.2 0 000-2.399z" clip-rule="evenodd" />
              </svg>
              Instagram
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center hover:text-white group">
              <svg class="w-5 h-5 mr-2 text-gray-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.411 0 5.846 0 12s.488 8.589 4.385 8.816c3.6.245 11.626.246 15.23 0 3.897-.227 4.385-2.65 4.385-8.816s-.488-8.589-4.385-8.816zm-10.615 12.737V6.079l6.24 3.441-6.24 3.401z" />
              </svg>
              Youtube
            </a>
          </li>
        </ul>
      </div>
    </div>

    {{-- Línea divisoria --}}
    <hr class="border-gray-600">

    {{-- Sección Inferior del Footer: Copyright y Enlaces legales --}}
    <div class="pt-6 pb-2 flex flex-col md:flex-row justify-between items-center text-sm">
      <p class="text-gray-400 mb-4 md:mb-0">
        &copy; <span id="currentYear">2024</span> El Rey Jesus. All rights reserved.
      </p>
      <nav class="flex flex-wrap justify-center md:justify-end gap-x-6 gap-y-2">
        <a href="#" class="hover:text-white hover:underline">Políticas de Privacidad</a>
        <a href="#" class="hover:text-white hover:underline">Términos y condiciones</a>
        <a href="#" class="hover:text-white hover:underline">Configuración de Cookies</a>
      </nav>
    </div>
  </div>
</footer>

<script>
  // Script simple para actualizar el año del copyright dinámicamente
  document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>
<footer class="content-info">
  {* @php(dynamic_sidebar('sidebar-footer')) *}
</footer>
