@extends('layouts.app')
@section('content')
    @component('components.bg-image', ['image' => $image])
    @endcomponent

    <div class="pl-10 pr-10 mt-4 mb-4 descripcion md:absolute md:p-0 md:m-0">
        <p class="m-0 text-xs text-center text-grey tracking-02 md:text-left md:text-white"> {!! $descripcion !!} </p>
    </div>

    <div class="container-grid md:w-1/2">
        <div class="z-0 grid">

            @php
                $series = get_field('series_portada', 'option');

                // Ordenar series por el número de orden
                // https://stackoverflow.com/a/27691531

                $series_con_orden = array_map(function ($serie) {
                    return [
                        'serie' => $serie,
                        'orden' => get_field('orden', $serie),
                    ];
                }, $series);

                function custom_sort($a, $b)
                {
                    return strnatcmp($a['orden'], $b['orden']);
                }

                usort($series_con_orden, 'custom_sort');

            @endphp

            @foreach ($series_con_orden as $serie)
                @php
                    $serie = $serie['serie'];

                    // toda esta movida es porque hay algún error que hace que unas veces sí
                    // y otras no las imágenes sean devueltas como un string.
                    $image_slider = get_field('featured_image_serie', 'serie_' . $serie->term_id);
                    $image_slider_int = (int) $image_slider;
                    $image_slider = wp_get_attachment_image($image_slider_int, 'large');
                    $term_link = get_term_link($serie, 'serie');
                @endphp

                <div>
                    <div class="absolute hidden h-full fondo md:block md:bg-white md:opacity-75"></div>
                    <a href="{{ $term_link }}"
                        class="relative flex p-5 border-t serie border-naranja text-marron md:border-t-0">
                        <div class="w-1/2 img-wrap">
                            {!! $image_slider !!}
                        </div>

                        <div class="flex flex-col content-center justify-center w-1/2 p-6 pr-0 text-center data-wrap">
                            @if (get_field('nombre_periodo', 'serie_' . $serie->term_id))
                                <p class="mb-0 text-sm text-naranja">
                                    {{ get_field('nombre_periodo', 'serie_' . $serie->term_id) }}</p>
                            @endif
                            <h2 class="mb-0 text-sm text-naranja">{!! $serie->name !!}</h2>
                            <p class="mb-10 text-sm text-naranja">
                                ({{ get_field('periodo', 'serie_' . $serie->term_id) }})
                            </p>
                            <p class="text-xs italic font-bold text-marron">{{ get_the_title($image_slider_int) }}</p>
                            <p class="mb-0 text-xs text-marron">
                                {{ get_field('pie_nombre', 'serie_' . $serie->term_id) }}</p>
                            <p class="text-xs text-marron">{{ get_field('pie_medidas', 'serie_' . $serie->term_id) }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
