<article @php post_class( 'montserrat mb-8')
@endphp>
  <header>
    <h2 class="entry-title text-lg">{!! get_the_title() !!}</h2>
  </header>
  <div class="keep">
    @php the_content() @endphp
  </div>
</article>
