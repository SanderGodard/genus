if (document.getElementById("Slider")) {
  // console.log("ja?");
  // container = document.getElementsByClassName("classes")[0];
  container = document.getElementById("Slider");

  var isDown = false;
  let startX;
  let scrollLeft;

  container.addEventListener('mousedown', (e) => {
    isDown = true;
    container.classList.add('drar');
    //e.preventDefault();
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
  });
  container.addEventListener('mouseleave', (e) => {
    isDown = false;
    // e.preventDefault();
    container.classList.remove('drar');
  });
  container.addEventListener('mouseup', (e) => {
    isDown = false;
    // e.preventDefault();
    container.classList.remove('drar');
  });
  container.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    // e.preventDefault();
    // document.body.preventDefault();

    const x = e.pageX - container.offsetLeft;
    const walk = (x - startX) * 1;
    container.scrollLeft = scrollLeft - walk;
  });
}
