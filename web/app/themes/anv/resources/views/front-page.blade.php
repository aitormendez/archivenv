@extends('layouts.app') 

@section('content') 

	@component('components.bg-image', ['image' => $image]) 

	@endcomponent

	<div class="container-grid md:w-3/4">
		<div class="grid z-0">

			@foreach ($series as $serie)
				@php 
					$image = get_field('featured_image_serie', 'serie_' . $serie->term_id);
					$term_link = get_term_link($serie->name, 'serie');
				@endphp

				<div>
					<div class="fondo hidden absolute h-full md:block md:bg-white md:opacity-75"></div>
					<a href="{{ $term_link }}" class="serie relative flex pt-5 pb-5 border-naranja border-t text-marron md:border-t-0 md:pl-5 md:pr-5">
						<div class="img-wrap w-1/2">
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

						<div class="data-wrap flex flex-col  w-1/2 justify-center content-center text-center p-6 pr-0">
							<h2 class="text-sm mb-0">{!! $serie->name !!}</h2>
							<p class="text-sm mb-10"> ({{ get_field('periodo', 'serie_' . $serie->term_id) }})</p>
							<p class="font-bold italic text-xs">{{ $image['title'] }}</p>
							<p class="text-xs">{{ $image['caption'] }}</p>
						</div>
					</a>
				</div>

				

			@endforeach
		</div>
	
	</div>

@endsection