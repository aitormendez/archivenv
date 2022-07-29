@extends('layouts.app')

@section('content')

@include('partials.page-header')

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
<h2>{{ __('Catalogues', 'sage') }}</h2>
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
<h2>{{ __('Selected Bibliography', 'sage') }}</h2>
  <div class="columns">
    @posts
      @include('partials.content-'.get_post_type())
    @endposts
  </div>
</section>

@endsection
