@extends('layouts.app-series')

@section('content')

@include('partials.page-header')

@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
@endif

<div class="container">
<div class="grid md:flex md:flex-wrap">
  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
</div>

<p class="mt-24 text-naranja text-sm font-sans ml-4 uppercase md:mt-8 tracking-wide">{{ $frase_contacto }}</p>
</div>



@endsection
