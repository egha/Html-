responsiveNav(".nav-collapse", {
  label: '<img class="brand" src="/images/logo.png" />'
});

$(".full img").on("click", function() {
  $(this).toggleClass("zoom");
});

if ($("#blog-slider").length > 0) {
  new IdealImageSlider.Slider({
    selector: '#blog-slider',
    effect: 'fade'
  }).start();
}
