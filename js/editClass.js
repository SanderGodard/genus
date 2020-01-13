if (document.getElementsByTagName("form")[2].getElementsByTagName("textarea")[0]) {
  hin = document.getElementsByTagName("form")[2].getElementsByTagName("textarea")[0];
  ein = document.getElementsByClassName("students")[0];
  hin.value = ein.innerHTML;
  ein.oninput = (e) => {
      hin.value = ein.innerHTML;
  };
}

function listClean() {
  wr = document.getElementsByClassName("students")[0];
  if (wr.innerHTML == "") {
    document.getElementsByClassName("students")[0].appendChild(document.createElement("div"));
  }
  if (typeof(wr.childNodes[0]) == "string") {
    // delete
    wr.childNodes[0].remove()
  }
}


function toggleSeating() {
  var show = document.getElementsByClassName("class")[0];
  if (show.style.display == "inline-flex" || show.style.display == "" || show.style.display == undefined || show.style.display == null) {
    show.style.display = "none";
  } else {
    show.style.display = "inline-flex";
  }
}


function apply(d) {
  // Make array of names (Gets randomized)
  s = document.getElementsByClassName("students")[0];
  b = s.children // Må gjøres i to steg ellers blir det fucked

  a = [];
  finished = [];
  for (var i = 0; i < s.children.length; i++) {
    a[i] = b[i].innerHTML; // her må man ha b ellers fucked

    // a[i] = a[i].replace(/<br>/, "").replace(/&nsbp;/g, ""); // fjerner whitespace osv.
  }

  c = "";
  for (var i = 0; i < b.length; i++) {
    c += b[i].innerHTML + ",";
  }
  // cleaning...
  // c = toString(a);
  c = c.replace(/<div>/g, "").replace(/<\/div>/g, "").replace(/<br>/g, "").replace(/<p>/g, "").replace(/<\/p>/g, "").replace(/&nsbp;/g, "");
  a = c.split(",");
  a = a.filter(Boolean);
  z = a.filter(Boolean);
  // students = a; // gjør så order blir fucked.....
  // return function
  seating = randomSeating(a);

  // Spit them back in
  // s.innerHTML = "";
  // for (var i = 0; i < a.length; i++) {
  //   div = document.createElement("div");
  //   div.innerHTML = a[i];
  //   wr.appendChild(div);
  // }

  // popup
  applyModal(d);

  studentForm = document.getElementById("names");
  seatingForm = document.getElementById("seats");
  // Put in form storage

  // a = toString(a)
  // x = "";
  // y = "";
  // for (var i = 0; i < z.length; i++) {
  //   x += z[i].innerHTML.toString() + ",";
  // }
  j = z.toString();
  k = a.toString();
  //seating = toString(seating)

  studentForm.value = j;
  seatingForm.value = k;
  // studentForm.setAttribute("value", j);
  // seatingForm.setAttribute("value", k);
  // studentForm.value = a;
  // seatingForm.value = seating;

}
