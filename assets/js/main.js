export function main(json) {
  // Declaración de variables
  let body = document.querySelector("body");
  let title = document.querySelector("title");
  let head = document.querySelector("head");

  // Inicializar variables
  body.innerHTML = ""; // Limpiar el body
  title.innerHTML = ""; // Limpiar el title

  // Crear elementos
  let header = document.createElement("header");
  let main = document.createElement("main");
  let footer = document.createElement("footer");

  // Append Childs
  body.appendChild(header);
  body.appendChild(main);
  body.appendChild(footer);

  // Configuración del Head

  // link.rel = "stylesheet";
  // link.href = json.css;
  // link.type = "text/css";
  // head.appendChild(link);

  console.log(json.css);
  // Para cada css
  for (let i = 0; i < json.css.length; i++) {
    let link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = json.css[i];
    link.type = "text/css";
    head.appendChild(link);
  }
  title.innerHTML = "Pagina de sorteo";

  // console.log(json);
  // console.log(json.css[0]);
  // console.log(json.js);
  // console.log(json.php);

  // Crear el header
  let h1 = document.createElement("h1");
  h1.innerHTML = "Pagina de sorteo";
  header.appendChild(h1);
  h1.classList.add("cabeza");
}
