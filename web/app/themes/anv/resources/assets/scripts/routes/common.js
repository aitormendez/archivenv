export default {
  init() {
    // JavaScript to be fired on all pages

    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('.nav-primary').toggleClass('cerrado');
    });

    $('.menu-item-has-children').click(function() {
      $(this).find('.sub-menu').toggleClass('open');
      $('.fondomenu').toggleClass('open');
    });

    $('.menu-item-has-children').mouseleave(function() {
      $(this).find('.sub-menu').removeClass('open');
      $('.fondomenu').removeClass('open');
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
