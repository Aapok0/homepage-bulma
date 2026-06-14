var anim_speed = 10;

// Function to get the element and the skill level
function animateNumber(nm) {
  el = document.getElementById(nm);
  lastnm = Number(document.getElementById(nm).innerHTML);
  increaseNumber(0, lastnm, el);
}

// Recursive function to increase number with increments
function increaseNumber(i, lastnm, el) {
  if (i <= lastnm) {
    el.innerHTML = i;
    setTimeout(function() { // Change animation speed with delay
      increaseNumber(i + 1, lastnm, el);
    }, anim_speed);
  }
}

animateNumber('nm_web');
animateNumber('nm_prog');
animateNumber('nm_iac');
animateNumber('nm_uiux');
animateNumber('nm_cloud');
animateNumber('nm_services');
animateNumber('nm_term');
