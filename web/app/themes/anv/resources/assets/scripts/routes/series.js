import 'lightgallery/dist/js/lightgallery';
import 'lightgallery/modules/lg-fullscreen';
import 'lightgallery/modules/lg-hash';

export default {
  init() {
    // JavaScript to be fired

    let width = $(window).width();

    console.log(window.devicePixelRatio || 1);

    if (width > 768) {
      let lg = $('.grid').lightGallery({
        selector: 'a',
        speed: 1000,
        preload: 2,
        hideBarsDelay: 1000,
        mode: 'lg-fade',
        download: false,
        height: 'calc(100vh - 250px)',
      });

      lg.on('onBeforeOpen.lg', function() {
        $('.main').addClass('invisible')
      });

      lg.on('onSlideItemLoad.lg', function() {
        $('.main').addClass('invisible')
      });

      lg.on('onBeforeClose.lg', function() {
        $('.main').removeClass('invisible')
      });
    }



    window.onresize = function() {
      resize();
    };

    function resize() {
      $('article').each(function() {
        let ancho = $(this).width();
        let altoImg = $('img', this).height();
        if (width > 768) {
          $(this).height(ancho - 5);
        } else {
          $(this).height(altoImg - 5);
        }
      });
    }

    resize();



  },
};
