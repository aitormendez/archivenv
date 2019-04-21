@extends('layouts.app')

@section('content')

@query([
  'post_type' => 'publication',
  'post_status'  => array( 'publish' ),
  'nopaging'     => true,
  'order'        => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'publication_type',
      'field'    => 'slug',
      'terms'    => 'catalogues',
    ),
  ),
])

<section>
<h2 class="pt-10 pb-6 text-xl">{{ __('Catalogues', 'sage') }}</h2>
  <div class="columns">
    @posts
      @include('partials.content-'.get_post_type())
    @endposts
  </div>
</section>

@query([
  'post_type' => 'publication',
  'post_status'  => array( 'publish' ),
  'nopaging'     => true,
  'order'        => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => 'publication_type',
      'field'    => 'slug',
      'terms'    => 'bibliography',
    ),
  ),
])

<section>
<h2>{{ __('Bibliography', 'sage') }}</h2>
  <div class="columns">
    @posts
      @include('partials.content-'.get_post_type())
    @endposts
  </div>
</section>

@endsection
