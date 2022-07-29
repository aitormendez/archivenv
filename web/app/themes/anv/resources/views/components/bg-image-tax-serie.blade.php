<div class="c-bg-image {{$class ?? ''}} js-bg-image h-full bg-no-repeat bg-contain bg-center">
  <img src="{{ wp_get_attachment_image_src($image, 'full')[0] }}" style="display:none" sizes="(max-width: 768px) 100vw, 200px" srcset="{{ wp_get_attachment_image_srcset($image, 'full') }}" alt="{{ TaxonomySerie::imageAlt() }}">
</div>

