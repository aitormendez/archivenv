<header class="banner bg-white md:p-3">
  <a class="brand block pt-20 leading-tight md:inline-block" href="{{ home_url('/') }}">
      <span class="archive block mx-auto text-center uppercase border-color-naranja">Archive</span> 
      <span class="navarro block mx-auto text-center font-logo text-marron text-3xl tracking-15 md:border-l-2 md:border-naranja">navarro</span> 
      <span class="vives block mx-auto text-center font-logo text-marron text-3xl tracking-15">vives</span> 
    </a>

  <div class="menus lg:flex">
    <nav class="nav-primary cerrado z-10">
      @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
      !!} @endif
    </nav>
    <nav class="nav-lang absolute pin-t mt-5 lg:mt-2 lg:pin-none w-full md:w-auto lg:w-auto flex lg:static justify-center z-20 md:z-0">
      @if (has_nav_menu('lang_selector')) {!! wp_nav_menu(['theme_location' => 'lang_selector', 'menu_class' => 'nav list-reset
      flex']) !!} @endif
    </nav>
  </div>


  <button class="hamburger hamburger--spring absolute z-50 lg:hidden" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <div class="fondomenu absolute hidden lg:block bg-white w-full z-10 overflow-hidden">
    <div class="borders w-full h-full border-t border-b py-4 border-naranja"></div>
  </div>
</header>