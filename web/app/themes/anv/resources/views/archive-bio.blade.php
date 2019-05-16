@extends('layouts.app')

@section('content')

@include('partials.page-header')

@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
@endif


<div class="columns">
@while (have_posts()) @php the_post() @endphp
  @include('partials.content-'.get_post_type())
@endwhile
</div>

@query([
  'post_type' => 'page',
  'pagename' => 'awards-and-honours',
])

<section>
  @posts
    <h2 class="pb-6">@title</h2>
    <div class="entry-content">
      @content
    </div>
  @endposts
</section>



{!! get_the_posts_navigation() !!}

@endsection
