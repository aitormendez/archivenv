<article>
  @if (get_the_content())
      {!! get_the_content() !!}
  @endif

  {!! ArchivePublication::cover() !!}

</article>

