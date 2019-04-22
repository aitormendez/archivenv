<div class="c-bg-image {{$class ?? ''}} js-bg-image">
  <img class="bg-contain" src="{{ wp_get_attachment_image_src($image, 'full')[0] }}" style="display:none" sizes="100vw" srcset="{{ wp_get_attachment_image_srcset($image, 'full') }}">
  {!! $slot !!}
</div>
