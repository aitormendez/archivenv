<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  @if (is_front_page())
    <body @php body_class('c-bg-image js-bg-image') @endphp>
      <img src="{{ wp_get_attachment_image_src($image, 'full')[0] }}" style="display:none" sizes="100vw" srcset="{{ wp_get_attachment_image_srcset($image, 'full') }}">
  @else
    <body @php body_class() @endphp>
  @endif
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
