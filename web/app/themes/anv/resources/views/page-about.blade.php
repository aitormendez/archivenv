{{--
  Template Name: Page About
--}}

@extends('layouts.app')


@section('content')

    @if (have_rows('chapters'))
      @while (have_rows('chapters')) @php the_row() @endphp 
        <h2>{!! the_sub_field('title') !!}</h2>
        <div class="chapter-content">
        {!! the_sub_field('content') !!}
        </div>
      @endwhile
    @endif


  
@endsection
