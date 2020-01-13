if (document.getElementById("crederror")) {
  makeModal()
  header.innerHTML = "Credentials error";
  form.setAttribute("action", "logout/");
  p = document.createElement("p");
  p.innerHTML = "Sorry for the inconvenience.<br>There was an error with the credentials,<br>and you need to log back in.";
  btn = document.createElement("button");
  // btn.classList.add("cancel");
  btn.setAttribute("type", "submit");
  btn.setAttribute("name", "logBackIn");
  btn.innerHTML = "Log back in";
  // form.classList.add("tittel");

  document.body.appendChild(wrapper);
  wrapper.appendChild(bg);
  wrapper.appendChild(modal);
  modal.appendChild(header);
  modal.appendChild(form);
  form.appendChild(p);
  form.appendChild(btn);
}
