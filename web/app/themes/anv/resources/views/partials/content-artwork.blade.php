<article class="my-4 md:w-1/3 md:p-4 md:my-0 md:m-40 block">
  <div class="interior md:border md:border-grey md:p-4 block h-full">
    <a class="thumb md:block md:h-full" href="{!! the_post_thumbnail_url( 'full' ) !!}">
        @component('components.bg-image-tax-serie', ['image' => TaxonomySerie::image()]) @endcomponent
    </a>
  </div>
</article>


