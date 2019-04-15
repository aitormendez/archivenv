@extends('layouts.app') 

@section('content') 

	@component('components.bg-image', ['image' => $image]) 

	@endcomponent

	<div class="grid">

	@foreach ($series as $serie)
		@php 
			$image = get_field('featured_image_serie', 'serie_' . $serie->term_id);
			$term_link = get_term_link($serie->name, 'serie');
		@endphp

		<a href="{{ $term_link }}" class="serie">
			<div class="img-wrap">
			<img
			src="{{ $image['url'] }}"
			alt="{{ $image['alt'] }}"
			srcset="
					{{ $image['sizes']['vert-1200'] }} 1200w,
					{{ $image['sizes']['vert-800'] }} 800w,
					{{ $image['sizes']['vert-400'] }} 400w
					"
					sizes="(max-width: 700px) 600px, calc(100vw)"
			/>
			</div>

			<div class="data-wrap">
				<h2>{!! $serie->name !!}</h2>
			</div>


		</a>

	@endforeach

	
	</div> // grid




@dump($series)

@endsection