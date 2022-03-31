
const $seleccionArchivos = document.querySelector("#imagenPrevisualizacion"),
  $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion01");
  $imagenPrevisualizacion.src = "recursos/imagenes/Fotos_Perfil/gatico_01.jpg";


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
