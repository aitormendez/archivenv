<article @php post_class( 'montserrat') 
@endphp>
  <header>
    <h2 class="entry-title text-lg mt-8 first-child:mt-0">{!! get_the_title() !!}</h2>
  </header>
  <div class="entry-summary">
    @php the_content() 
@endphp
  </div>
</article>