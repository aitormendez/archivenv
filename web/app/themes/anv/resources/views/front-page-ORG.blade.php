@extends('layouts.app')
@section('content')
    @component('components.bg-image', ['image' => $image])
    @endcomponent

    <div class="pl-10 pr-10 mt-4 mb-4 descripcion md:absolute md:p-0 md:m-0">
        <p class="m-0 text-xs text-center text-grey tracking-02 md:text-left md:text-white"> {!! $descripcion !!} </p>
    </div>

    <div class="container-grid md:w-1/2">
        <div class="z-0 grid">

            @php $default_language = wpml_get_default_language() @endphp

            @dump($series)

            @foreach ($series as $serie)
                @php
                    // Obtener el term object en el lenguaje por defecto
                    // https://wpml.org/forums/topic/get-term-slug-in-default-language/
                    global $icl_adjust_id_url_filter_off;
                    $orig_flag_value = $icl_adjust_id_url_filter_off;
                    $icl_adjust_id_url_filter_off = true;
                    $default_term_id = icl_object_id($serie->term_id, $serie->taxonomy, true, $default_language);
                    $term_default = get_term($default_term_id, $serie->taxonomy);
                    $icl_adjust_id_url_filter_off = $orig_flag_value;
                @endphp

                @if (in_array($term_default->slug, [
                        'doors',
                        'boats',
                        'geometry',
                        'optic-kinetic',
                        'mexico',
                        'fruits',
                        'urban-spaces',
                        'shadows',
                        'atmospheres',
                        'existencial-realism',
                    ]))
                    @php
                        $image_slider = get_field('featured_image_serie', 'serie_' . $serie->term_id);
                        $term_link = get_term_link($serie->name, 'serie');
                    @endphp

                    <div>
                        <div class="absolute hidden h-full fondo md:block md:bg-white md:opacity-75"></div>
                        <a href="{{ $term_link }}"
                            class="relative flex p-5 border-t serie border-naranja text-marron md:border-t-0">
                            <div class="w-1/2 img-wrap">
                                <img src="{{ $image_slider['url'] }}" alt="{{ $image_slider['alt'] }}"
                                    srcset="
									{{ $image_slider['sizes']['vert-1200'] }} 1200w,
									{{ $image_slider['sizes']['vert-800'] }} 800w,
                  {{ $image_slider['sizes']['vert-400'] }} 400w"
                                    sizes="(max-width: 700px) 600px, calc(100vw)" />
                            </div>

                            <div class="flex flex-col content-center justify-center w-1/2 p-6 pr-0 text-center data-wrap">
                                @if (get_field('nombre_periodo', 'serie_' . $serie->term_id))
                                    <p class="mb-0 text-sm text-naranja">
                                        {{ get_field('nombre_periodo', 'serie_' . $serie->term_id) }}</p>
                                @endif
                                <h2 class="mb-0 text-sm text-naranja">{!! $serie->name !!}</h2>
                                <p class="mb-10 text-sm text-naranja">
                                    ({{ get_field('periodo', 'serie_' . $serie->term_id) }})</p>
                                <p class="text-xs italic font-bold text-marron">{{ $image_slider['title'] }}</p>
                                <p class="mb-0 text-xs text-marron">
                                    {{ get_field('pie_nombre', 'serie_' . $serie->term_id) }}</p>
                                <p class="text-xs text-marron">{{ get_field('pie_medidas', 'serie_' . $serie->term_id) }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
@endsection
