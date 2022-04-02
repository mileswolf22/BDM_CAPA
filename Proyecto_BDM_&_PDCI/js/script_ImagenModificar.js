const $seleccionArchivos = document.querySelector("#imagenPrevisualizacion"),
  $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion01");
 

$seleccionArchivos.addEventListener("change", () => {

  var imagenYaPuestaAnterior = $imagenPrevisualizacion.src;
  
  const archivos = $seleccionArchivos.files;
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = imagenYaPuestaAnterior;
    return;
  }

  const primerArchivo = archivos[0];
  const objectURL = URL.createObjectURL(primerArchivo);
  $imagenPrevisualizacion.src = objectURL;
});