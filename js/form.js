selects = document.getElementsByTagName("select");
for (var i = 0; i < selects.length; i++) {
  if (selects[i].hasAttribute("name", "chooseClass")) {
    selects[i].setAttribute("onchange", "sideBtns(" + i +")");
  }
}


// Usikker på om jeg vil ha med de tre linjene under.
// p = document.createElement("span");
// form = document.getElementsByTagName("main")[0].children[0];
// form.insertBefore(p, form.children[1]);

function sideBtns(i) {
  i = parseInt(i);
  val = selects[i].value;
  if (val !== 0) {
    sidebar = document.getElementsByClassName("sidebar")[0];
    buttons = sidebar.getElementsByTagName("button");
    for (var j = 0; j < buttons.length; j++) {
      if (buttons[j].classList.contains("faded")) {
        buttons[j].classList.remove("faded");
      }
    }
    // Usikker på om jeg vil ha med den linjen under.
    // p.innerHTML = "If you want to edit absence or points before entering the different modes, go to the sidebar.";
  }
}


function checkValue() {
  failes = false;
  for (var k = 0; k < selects.length; k++) {
    if (selects[k].hasAttribute("required")) {
      ele = selects[k];
      val = parseInt(ele.value);
      if (val == 0) {
        // alert("You need to choose a class first");
        // alert("nei.");
        // return false;
        makeModal();
        header.innerHTML = "Choose class";
        form.setAttribute("action", "#");
        p = document.createElement("p");
        p.innerHTML = "You need to choose a class before continuing.";
        cancel = document.createElement("button");
        cancel.setAttribute("type", "button");
        cancel.setAttribute("name", "cancel");
        cancel.setAttribute("onclick", "modalOff()");
        cancel.innerHTML = "Close";

        document.body.appendChild(wrapper);
        wrapper.appendChild(bg);
        wrapper.appendChild(modal);
        modal.appendChild(header);
        modal.appendChild(form);
        form.appendChild(p);
        form.appendChild(cancel);

        failed = true;
        return false;
      }
    }
  }
  if (failed == false) {
    return true;
  }
}


function formSubmit() {
  this.parentNode.parentNode.parentNode.getElementsByTagName("form")[0].submit();
}
