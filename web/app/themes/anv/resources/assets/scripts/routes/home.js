var imagesLoaded = require('imagesloaded');
imagesLoaded.makeJQueryPlugin($);

export default {
  init() {
    // JavaScript to be fired on the home page

    // Slick carousel

    let width = $(window).width();

    function posicionar() {
      let elemento = $('.container-grid .grid');

      let ancho = elemento.width();
      let posX = (($(window).width() - ancho) / 3) * 2;
      elemento.css('left', posX);

      let alto = elemento.height();
      let posY = (($(window).height() - alto) / 3) * 2;
      elemento.css('top', posY);
      console.log('alto: ' + alto);
      console.log('winY: ' + $(window).height());
      console.log('posY: ' + posY);
    }


    if (width >= 769) {
      $('.container-grid .grid').slick({
        arrows: false,
        // autoplay: true,
        fade: true,
        speed: 2000,
        autoplaySpeed: 5000,
      });

      $('.slick-current').focus();

      $('.container-grid .grid').imagesLoaded(function() {
        posicionar();
      });



      $(window).resize(function() {
        posicionar();
      });



      $(document).keydown(function(e) {
        switch (e.which) {
          case 37: // left
            $('.container-grid .grid').slick('slickPrev');
            console.log('prev');
            break;

          case 39: // right
            $('.container-grid .grid').slick('slickNext');
            console.log('next');
            break;

          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      });




    }





  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
