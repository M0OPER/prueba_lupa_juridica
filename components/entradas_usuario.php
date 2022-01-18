<?php
  if ($datos) {
    foreach ($datos as $dato) {
      echo ('<div class="card text-center">
      <div class="card-header">
        Contenido lorem ipsum
      </div>
      <div class="card-body">
        <h5 class="card-title">'.$dato["ent_titulo"].'</h5>
        <img style="width: 18rem;" src="'.$dato["ent_imagen"].'" alt="images">
        <p class="card-text">'.$dato["ent_descripcion"].'</p>
        <a href="#" class="btn btn-primary">VER DETALLES</a>
      </div>
      <div class="card-footer text-muted">
      '.$dato["ent_fecha"].'
      </div>
    </div>'); 
    } 
  }else{
    echo('<h6>Wops! No se encontraron entradas en la BBDD. Está vacia.</h6>');
  }
?>