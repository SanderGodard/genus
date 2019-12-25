function addClass() {
  wrapper = document.createElement("div");
  wrapper.classList.add("modalWrapper");
  bg = document.createElement("div");
  bg.classList.add("bg");
  bg.setAttribute("onclick", "modalOff()");
  modal = document.createElement("div");
  modal.classList.add("modal");
  // modal.innerHTML = "Ikke lagt til enda";
  header = document.createElement("div");
  header.classList.add("tittel");
  header.innerHTML = "Add Class";
  form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("action", "myClasses/");
  input = document.createElement("input");
  input.setAttribute("type", "text");
  input.setAttribute("name", "className");
  input.setAttribute("placeholder", "Name of the class. eg: '2020 AP PHYS'");
  cancel = document.createElement("button");
  cancel.setAttribute("type", "button");
  cancel.setAttribute("name", "cancel");
  cancel.setAttribute("onclick", "modalOff()");
  cancel.classList.add("cancel");
  cancel.innerHTML = "Cancel";
  btn = document.createElement("button");
  btn.setAttribute("type", "submit");
  btn.setAttribute("name", "add");
  btn.innerHTML = "Add";
  // form.classList.add("tittel");

  document.body.appendChild(wrapper);
  wrapper.appendChild(bg);
  wrapper.appendChild(modal);
  modal.appendChild(header);
  modal.appendChild(form);
  form.appendChild(input);
  form.appendChild(cancel);
  form.appendChild(btn);
}

function modalOff() {
  modal = document.getElementsByClassName("modalWrapper")[0];
  modal.remove();
}
