export default {
  init() {
    // JavaScript to be fired on the home page

    let width = $(window).width();

    function posicionar() {
      let elemento = $('.container-grid .grid');

      let ancho = elemento.width();
      let posX = (($(window).width() - ancho) / 3) * 2;
      elemento.css('left', posX);

      let alto = elemento.height();
      let posY = (($(window).height() - alto) / 3) * 2;
      elemento.css('top', posY);
    }


    if (width >= 769) {
      $('.container-grid .grid').slick({
        arrows: false,
        autoplay: true,
        focusOnChange: true,
        fade: true,
        speed: 2000,
        autoplaySpeed: 5000,
      });

      $('.slick-current').focus();

      // posicionar carrusel
      posicionar();

      $(window).resize(function() {
        posicionar();
      });

    }





  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
