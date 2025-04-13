import { main } from "../assets/js/main.js";

document.addEventListener("DOMContentLoaded", datos);

function datos() {
  let datos = new XMLHttpRequest();
  datos.open("GET", "./server/search.php", true);
  datos.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  datos.onreadystatechange = function () {
    if (datos.readyState == 4 && datos.status == 200) {
      let respuesta = datos.responseText;
      let json = JSON.parse(respuesta);
      // console.log(json.css);
      ordenarCss(json);
      main(json);
    }
  };
  datos.send();
}

function ordenarCss(json) {
  let prioridad = "main.css";
  for (let i = 0; i < json.css.length; i++) {
    if (json.css[i].includes(prioridad)) {
      // console.log(
      //   prioridad +
      //     " encontrado en la posición " +
      //     i +
      //     " del array: " +
      //     json.css[i]
      // );
      let elemento = json.css.splice(i, 1); // Eliminar el elemento encontrado
      json.css.unshift(elemento); // Añadir el elemento al principio del array
    } else {
      // console.log(
      //   prioridad +
      //     " no encontrado en la posición " +
      //     i +
      //     " del array: " +
      //     json.css[i]
      // );
    }
  }
  // console.log("Nuevo JSON: " + json.css);
}
