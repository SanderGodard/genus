if (document.getElementsByTagName("form")[0].children.getElementsByTagName("textarea")[0]) {  
  hin = document.getElementsByTagName("form")[0].children.getElementsByTagName("textarea")[0];
  ein = document.getElementsByClassName("students")[0];
  ein.oninput = (e) => {
      hin.value = ein.innerHTML;
  };
}
