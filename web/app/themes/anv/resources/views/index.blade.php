@extends('layouts.app')

@section('content')

@include('partials.page-header')

@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
@endif

<section class="c-bg-image {{$class ?? ''}} js-bg-image">
  <img src="{{ wp_get_attachment_image_src($image, 'full')[0] }}" style="display:none" sizes="100vw" srcset="{{ wp_get_attachment_image_srcset($image, 'full') }}">
  {!! $slot !!}
</section>


@while (have_posts()) @php the_post() @endphp
  @include('partials.content-'.get_post_type())
@endwhile

{!! get_the_posts_navigation() !!}

@endsection
