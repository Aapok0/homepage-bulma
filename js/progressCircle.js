function animateCircle(barClass) {
  document.querySelectorAll('.' + barClass).forEach((bar) => {
    const circle = bar.querySelector('circle');
    if (!circle) {
      return;
    }

    const radius = Number(circle.getAttribute('r'));
    const percent = Number(bar.dataset.percent);
    const circumference = 2 * radius * Math.PI;
    const level = percent * circumference / 100;

    bar.style.strokeDasharray = level + ' 999';
  });
}

animateCircle('bar_web');
animateCircle('bar_prog');
animateCircle('bar_iac');
animateCircle('bar_uiux');
animateCircle('bar_cloud');
animateCircle('bar_services');
animateCircle('bar_term');
