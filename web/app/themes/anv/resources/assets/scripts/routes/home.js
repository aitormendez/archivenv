export default {
  init() {
    // JavaScript to be fired on the home page

    let width = $(window).width();


    if (width >= 769) {
      $('.grid').slick({
        variableWidth: true,
        arrows: false,
        autoplay: false,
        focusOnChange: true,
      });


      $('.slick-current').focus();
    }





  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
