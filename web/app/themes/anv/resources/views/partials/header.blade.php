<header class="banner bg-white">
  <div class="container">
    <a class="brand text-naranja text-3xl inline-block" href="{{ home_url('/') }}">
      <span class="archive font-bold uppercase text-xs inline-block" >{{ __('archive', 'sage') }}</span> 
      <span class="anv font-logo text-marron inline-block" >navarro vives</span> 
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation')) {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
      !!} @endif
    </nav>
  </div>
  <button class="hamburger hamburger--spring absolute" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
</header>