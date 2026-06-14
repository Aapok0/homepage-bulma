function animateCircle(bar) {
  var $bar = $('.' + bar),
    radius = $bar.find('circle').attr('r'),
    percent = $bar.data('percent'),
    circumference = 2 * radius * Math.PI,
    level = percent * circumference / 100
  $bar.css('stroke-dasharray', level + ' 999')
}

animateCircle('bar_web');
animateCircle('bar_prog');
animateCircle('bar_iac');
animateCircle('bar_uiux');
animateCircle('bar_cloud');
animateCircle('bar_services');
animateCircle('bar_term');
