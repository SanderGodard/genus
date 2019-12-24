// if (document.getElementById("Slider")) {
  // console.log("ja?");
  // juletre = document.getElementsByClassName("classes")[0];
  juletre = document.getElementById("Slider");

  var isDown = false;
  let startX;
  let scrollLeft;

  juletre.addEventListener('mousedown', (e) => {
    isDown = true;
    juletre.classList.add('drar');
    //e.preventDefault();
    startX = e.pageX - juletre.offsetLeft;
    scrollLeft = juletre.scrollLeft;
  });
  juletre.addEventListener('mouseleave', (e) => {
    isDown = false;
    // e.preventDefault();
    juletre.classList.remove('drar');
  });
  juletre.addEventListener('mouseup', (e) => {
    isDown = false;
    // e.preventDefault();
    juletre.classList.remove('drar');
  });
  juletre.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    // e.preventDefault();
    // document.body.preventDefault();

    const x = e.pageX - juletre.offsetLeft;
    const walk = (x - startX) * 1;
    juletre.scrollLeft = scrollLeft - walk;
  });
// }
