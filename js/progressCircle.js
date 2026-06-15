function animateCircle(bar) {
  const circle = bar.querySelector('circle');
  if (!circle) {
    return;
  }

  const radius = Number(circle.getAttribute('r'));
  const percent = Number(bar.dataset.percent);
  const circumference = 2 * radius * Math.PI;
  const level = percent * circumference / 100;

  // Paint the empty circle first, then transition on the next frame.
  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      circle.style.strokeDasharray = level + ' 999';
    });
  });
}

document.querySelectorAll('.skillbar').forEach(animateCircle);
