const anim_speed = 20;

function increaseNumber(i, lastnm, el) {
  if (i <= lastnm) {
    el.textContent = i;
    setTimeout(function() {
      increaseNumber(i + 1, lastnm, el);
    }, anim_speed);
  }
}

document.querySelectorAll('.skilltext').forEach((el) => {
  const target = Number(el.textContent);
  increaseNumber(0, target, el);
});
