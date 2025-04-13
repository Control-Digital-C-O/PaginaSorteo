document.addEventListener("DOMContentLoaded", datos);

function datos() {
  let datos = new XMLHttpRequest();
  datos.open("GET", "./server/search.php", true);
  datos.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  datos.onreadystatechange = function () {
    if (datos.readyState == 4 && datos.status == 200) {
      let respuesta = datos.responseText;
      // let body = document.querySelector("body");
      // let div = document.createElement("div");
      // div.innerHTML = json.parse(respuesta).html;
      // body.appendChild(div);

      console.log(respuesta);
      let json = JSON.parse(respuesta);

      console.log(json);
    }
  };
  datos.send();
}
