<article>
  @if (get_the_content())
      {!! get_the_content() !!}
  @endif

    @if (get_the_post_thumbnail())
      {!! get_the_post_thumbnail() !!}
  @endif

</article>