function makeModal() {
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
  form = document.createElement("form");
  form.setAttribute("method", "post");
}

function modalOff() {
  modal = document.getElementsByClassName("modalWrapper")[0];
  modal.remove();
}

function addClass() {
  // this.preventDefault();
  makeModal();
  header.innerHTML = "Add Class";
  form.setAttribute("action", "myClasses/");
  input = document.createElement("input");
  input.setAttribute("type", "text");
  input.setAttribute("name", "className");
  input.setAttribute("placeholder", "Name of the new class. eg: '2020 AP PHYS'");
  cancel = document.createElement("button");
  cancel.setAttribute("type", "button");
  cancel.setAttribute("name", "cancel");
  cancel.setAttribute("onclick", "modalOff()");
  cancel.innerHTML = "Cancel";
  btn = document.createElement("button");
  btn.classList.add("cancel");
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

function dupClass(name) {
  // this.preventDefault();
  makeModal();
  header.innerHTML = "Duplicate class " + name + "?";
  form.setAttribute("action", "myClasses/");
  input = document.createElement("input");
  input.setAttribute("type", "text");
  input.setAttribute("name", "className");
  input.setAttribute("placeholder", "Name of the new class. eg: '2020 AP PHYS'");
  cancel = document.createElement("button");
  cancel.setAttribute("type", "button");
  cancel.setAttribute("name", "cancel");
  cancel.setAttribute("onclick", "modalOff()");
  cancel.innerHTML = "Cancel";
  btn = document.createElement("button");
  btn.classList.add("cancel");
  btn.setAttribute("type", "submit");
  btn.setAttribute("name", "duplicate");
  btn.innerHTML = "Duplicate";
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

function delClass(name) {
  // this.preventDefault();
  makeModal();
  header.innerHTML = "Delete " + name + "?";
  form.setAttribute("action", "myClasses/");

  text = document.createElement("span");
  text.innerHTML = "This action will be permanent.<br>Are you sure you really want to <i><b>delete " + name + "</b></i>?";
  cancel = document.createElement("button");
  cancel.setAttribute("type", "button");
  cancel.setAttribute("name", "cancel");
  cancel.setAttribute("onclick", "modalOff()");
  cancel.classList.add("cancel");
  cancel.innerHTML = "Cancel";
  btn = document.createElement("button");
  btn.setAttribute("type", "submit");
  btn.setAttribute("name", "delete");
  btn.innerHTML = "Delete";
  // form.classList.add("tittel");

  document.body.appendChild(wrapper);
  wrapper.appendChild(bg);
  wrapper.appendChild(modal);
  modal.appendChild(header);
  modal.appendChild(form);
  form.appendChild(text);
  form.appendChild(cancel);
  form.appendChild(btn);
}


function applyModal(name) {
  // this.preventDefault();
  makeModal();
  header.innerHTML = "Apply changes to " + name + "?";
  form.setAttribute("action", "edit/?class=" + name);

  text = document.createElement("span");
  text.innerHTML = "If you have changed any students the seating will be randomized again.<br>This action will be permanent.<br>Do you want to make these changes?";
  cancel = document.createElement("button");
  cancel.setAttribute("type", "button");
  cancel.setAttribute("name", "cancel");
  cancel.setAttribute("onclick", "modalOff()");
  cancel.innerHTML = "Cancel";
  btn = document.createElement("button");
  btn.classList.add("cancel");
  btn.setAttribute("type", "submit");
  btn.setAttribute("name", "apply");
  btn.innerHTML = "Apply";
  // form.classList.add("tittel");
  // Hidden text
  names = document.createElement("input");
  names.setAttribute("id", "names");
  names.setAttribute("name", "names");
  names.setAttribute("style", "display: none;");
  seats = document.createElement("input");
  seats.setAttribute("id", "seats");
  seats.setAttribute("name", "seats");
  seats.setAttribute("style", "display: none;");

  document.body.appendChild(wrapper);
  wrapper.appendChild(bg);
  wrapper.appendChild(modal);
  modal.appendChild(header);
  modal.appendChild(form);

  form.appendChild(names);
  form.appendChild(seats);

  form.appendChild(text);
  form.appendChild(cancel);
  form.appendChild(btn);
}
