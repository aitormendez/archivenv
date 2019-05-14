<article class="mt-16 mb-10 md:w-1/3 md:p-4 md:my-0 md:m-40 block">
  <div class="interior md:border md:border-grey md:p-4 block h-full">
    <a class="thumb block h-full" href="{!! the_post_thumbnail_url( 'full' ) !!}">
        @component('components.bg-image-tax-serie', ['image' => TaxonomySerie::image()]) @endcomponent
    </a>
    <p class="text-center mt-4 mb-10 text-naranja text-xs md:hidden">{{ TaxonomySerie::imageAlt() }}</p>
  </div>
</article>
