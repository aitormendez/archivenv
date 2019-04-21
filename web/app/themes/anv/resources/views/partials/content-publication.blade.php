<article>
  @if (get_the_content())
      {!! get_the_content() !!}
  @endif

  @if (ArchivePublication::cover())
      {!! ArchivePublication::cover() !!}
  @endif

</article>

