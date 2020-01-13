buttons = document.getElementsByTagName("button");
for (var i = 0; i < buttons.length; i++) {
  if (buttons[i].name == "absence") {
    abs = buttons[i];
  } else if (buttons[i].name == "points") {
    poi = buttons[i];
  }
}
if (abs != undefined || abs != null) {
  abs.classList.remove("faded")
}
if (poi != undefined || poi != null) {
  poi.classList.remove("faded")
}

// modals = document.getElementsByClassName("modalWrappers");
// for (var i = 0; i < modals.length; i++) {
//   if (modals[i].children.getElementById("fraver")) {
//     absenceModal = modals[i];
//   } else if (modals[i].children.getElementById("points")) {
//     pointsModal = modals[i];
//   }
// }


function absenceToggle() {
  absenceModal = document.getElementById("fraver");
  if (absenceModal.style.display == "inline-flex") {
    absenceModal.style.display = "none";
  } else {
    absenceModal.style.display = "inline-flex";
  }
}

function pointsToggle() {
  pointsModal = document.getElementById("points");
  if (pointsModal.style.display == "inline-flex") {
    pointsModal.style.display = "none";
  } else {
    pointsModal.style.display = "inline-flex";
  }
}


function min(id) {
  parent = document.getElementById(id);
  count = parent.getElementsByTagName("span")[0];
  nr = parseInt(count.innerHTML);
  nr--;
  count.innerHTML = nr;
}

function add(id) {
  parent = document.getElementById(id);
  count = parent.getElementsByTagName("span")[0];
  nr = parseInt(count.innerHTML);
  nr++;
  count.innerHTML = nr;
}
