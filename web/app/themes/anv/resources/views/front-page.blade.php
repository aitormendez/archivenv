@extends('layouts.app') 
@section('content') @component('components.bg-image', ['image' => $image]) @endcomponent

<div class="descripcion pl-10 pr-10 mt-4 mb-4 md:absolute md:p-0 md:m-0">
	<p class="text-grey text-xs text-center m-0 tracking-02 md:text-left md:text-white"> {!! $descripcion !!} </p>
</div>

<div class="container-grid md:w-1/2">
	<div class="grid z-0">

		@php $default_language = wpml_get_default_language() @endphp

		@foreach ($series as $serie) 

		@php
			// Obtener el term object en el lenguaje por defecto
			// https://wpml.org/forums/topic/get-term-slug-in-default-language/
			global $icl_adjust_id_url_filter_off;
			$orig_flag_value = $icl_adjust_id_url_filter_off;
			$icl_adjust_id_url_filter_off = true;
			$default_term_id = icl_object_id( $serie->term_id, $serie->taxonomy, true, $default_language );
			$term_default = get_term( $default_term_id, $serie->taxonomy );
			$icl_adjust_id_url_filter_off = $orig_flag_value;
		@endphp

		@if ( in_array($term_default->slug, ['doors', 'boats', 'geometry', 'optic-kinetic', 'mexico', 'fruits']))
			
			@php 
			$image = get_field('featured_image_serie', 'serie_' . $serie->term_id); $term_link = get_term_link($serie->name,
			'serie');
			@endphp

			<div>
				<div class="fondo hidden absolute h-full md:block md:bg-white md:opacity-75"></div>
				<a href="{{ $term_link }}" class="serie relative flex p-5 border-naranja border-t text-marron md:border-t-0">
					<div class="img-wrap w-1/2">
						<img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" srcset="
									{{ $image['sizes']['vert-1200'] }} 1200w,
									{{ $image['sizes']['vert-800'] }} 800w,
									{{ $image['sizes']['vert-400'] }} 400w
									" sizes="(max-width: 700px) 600px, calc(100vw)" />
					</div>

					<div class="data-wrap flex flex-col  w-1/2 justify-center content-center text-center p-6 pr-0">
						@if (get_field('nombre_periodo', 'serie_' . $serie->term_id))
							<p class="text-sm mb-0 text-naranja">{{ get_field('nombre_periodo', 'serie_' . $serie->term_id )}}</p>
						@endif
						<h2 class="text-naranja text-sm mb-0">{!! $serie->name !!}</h2>
						<p class="text-sm mb-10 text-naranja"> ({{ get_field('periodo', 'serie_' . $serie->term_id) }})</p>
						<p class="font-bold italic text-xs text-marron">{{ $image['title'] }}</p>
						<p class="text-xs text-marron">{{ $image['caption'] }}</p>
					</div>
				</a>
			</div>
			
		@endif
		



		@endforeach
	</div>

</div>
@endsection