{{-- resources/views/partials/header.blade.php --}}
 <header class="bg-white py-4 shadow-sm" x-data="{ isMobileMenuOpen: false }">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
    {{-- Logo --}}
    <div class="flex-shrink-0">
      <a href="{{ home_url('/') }}" aria-label="Página de inicio de {{ $siteName ?? config('app.name') }}">
        {{-- Reemplaza este SVG con tu logo real --}}
        <img src="https://tailwindcss.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
 
    {{-- Navegación Principal --}}
    <nav class="hidden md:flex items-center space-x-4">
      @if (has_nav_menu('primary_navigation'))
        {!!
          wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav flex items-center space-x-4',
            'container' => false,
            'echo' => false,
            'walker' => new App\Walkers\TailwindNavWalker(), // Asegúrate de tener este Walker creado
          ])
        !!}
      @else
        <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Product</a>
        <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Features</a>
        <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Marketplace</a>
        <a href="#" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Company</a>
      @endif
    </nav>
 
    {{-- Botón "Log in" --}}
    <div class="hidden md:flex items-center ml-4">
      <a href="{{ wp_login_url() }}" class="text-sm font-medium text-gray-700 hover:text-indigo-600 flex items-center">
        Log in
        <svg class="ml-1 h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
      </a>
    </div>
 
    {{-- Menú Móvil --}}
    <div class="-mr-2 flex md:hidden">
      <button @click="isMobileMenuOpen = !isMobileMenuOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg x-show="!isMobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="isMobileMenuOpen" x-cloak class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
 
  {{-- Menú Móvil Desplegable --}}
  <div class="md:hidden" id="mobile-menu" x-show="isMobileMenuOpen" x-cloak>
    <div class="pt-2 pb-3 space-y-1">
      @if (has_nav_menu('primary_navigation'))
        {!!
          wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav-mobile space-y-1',
            'container' => false,
            'echo' => false,
            'walker' => new App\Walkers\TailwindMobileNavWalker(), // Asegúrate de tener este Walker creado
          ])
        !!}
      @else
        <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Product</a>
        <a href="#" class="border-transparent text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Features</a>
        <a href="#" class="border-transparent text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Marketplace</a>
        <a href="#" class="border-transparent text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Company</a>
      @endif
      <a href="{{ wp_login_url() }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-indigo-600">Log in</a>
    </div>
  </div>
 </header>
 
 {{-- Asegúrate de tener Alpine.js configurado en tu app.js --}}