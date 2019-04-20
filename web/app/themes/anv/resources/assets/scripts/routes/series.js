import 'lightgallery/dist/js/lightgallery';
import 'lightgallery/modules/lg-fullscreen';
import 'lightgallery/modules/lg-hash';

export default {
  init() {
    // JavaScript to be fired

    let lg = $('.grid').lightGallery({
      selector: 'a',
      speed: 1000,
      preload: 2,
      hideBarsDelay: 100000,
      mode: 'lg-fade',
      download: false,
      height: 'calc(100vh - 250px)',
    });

    lg.on('onBeforeOpen.lg', function() {
      $('.main').addClass('invisible')
    });

    lg.on('onBeforeClose.lg', function() {
      $('.main').removeClass('invisible')
    });

  },
};