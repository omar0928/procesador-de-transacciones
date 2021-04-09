<?php 
    require("datos.php");
    $file = array();

    $obj = new Datos();
    
    if(is_file('datos.dat')){
        $json = file_get_contents("datos.dat");
        $file = json_decode($json, true);
    }
    
    if(isset($_POST['importar'])){
        $obj->subirJson($file );
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Procesador de transacciones</title>
  </head>
  <body>

  <div class="container">
    <h1 class="p-5 text-center">Procesador de transacciones con JSON</h1>

    <form class="md-form text-center" action="" method="post" enctype="fultipart/form-data">
        <h3>Selecione el archivo en JSON para subir</h3>
        <div class="file-field">
            <div class="btn btn-primary btn-sm float-left">
            <span>JSON</span>
            <input type="file">
            </div>  
        </div>

        <button class="btn btn-primary btn-sm" name="importar">Importar</button>
    </form>

</di>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>