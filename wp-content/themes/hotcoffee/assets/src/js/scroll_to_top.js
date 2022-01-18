;(function ($) {
  $(document).ready(function () {
    $(window).ready('scroll', function () {
      if ($(this).scrollTop() > 100) {
        $('.arrow-up-button').fadeIn(400)
      } else {
        $('.arrow-up-button').fadeOut(400)
      }
    })

    $('.arrow-up-button').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 800)
      return false
    })
  })
})(jQuery)
