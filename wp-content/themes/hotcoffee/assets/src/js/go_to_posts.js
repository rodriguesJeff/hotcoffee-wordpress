;(function ($) {
  $('.fakeScroll').click(function (e) {
    e.preventDefault()
    $('html, body').animate(
      { scrollTop: $('.container-posts').offset().top },
      2000
    )
  })
})(jQuery)
