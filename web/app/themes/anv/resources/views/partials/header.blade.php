<header class="banner bg-white">
  <a class="brand" href="{{ home_url('/') }}">
      <span
        class="archive uppercase border-color-naranja">Archive</span> 
      <span class="anv font-logo text-marron">navarro vives</span> 
    </a>

  <div class="menus lg:flex">
    <nav class="nav-primary cerrado">
      @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
      !!} @endif
    </nav>
    <nav class="nav-lang absolute pin-t lg:pin-none mt-2 w-screen lg:w-auto flex lg:static justify-center">
      @if (has_nav_menu('lang_selector')) {!! wp_nav_menu(['theme_location' => 'lang_selector', 'menu_class' => 'nav list-reset
      flex']) !!} @endif
    </nav>
  </div>


  <button class="hamburger hamburger--spring absolute z-50" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner lg:hidden"></span>
    </span>
  </button>
  <div class="fondomenu absolute hidden lg:block bg-white w-screen z-10 pb-4">
    <div class="borders w-full h-full border-t border-b py-4 border-naranja"></div>
  </div>
</header>