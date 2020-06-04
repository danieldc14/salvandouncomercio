<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Cámara de Comercio</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>

<body>
<header> 
 <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light"> <a class="navbar-brand" href="#">
    <img src="imagenes/logo3.jpg" width="30" height="30" alt="" loading="lazy">
  </a>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Salud</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
       
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section --> 

<!-- Bootstrap Modals --> 
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Agregar comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="id_alumno">Id Alumno</label>
          <input  type="text" id="idalumno" value=""  class="form-control"/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Cod. Alumno</label>
          <input type="text" id="codalumno" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Cod. Matri</label>
          <input type="text" id="codmatri" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="Observacion">Observacion</label>
          <textarea style="text-transform:uppercase" id="obs" class="form-control"></textarea>
          <!--<input type="text" id="obs" class="form-control"/>--> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Ver más</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="nombres_neg">Nombre del Negocio</label>
      <input type="text" id="update_nombres_neg" value="" class="form-control" readonly/> 
        </div>
        <div class="form-group">
          <label for="direccion_neg">Dirección</label>
          <input type="text" id="update_direccion_neg" class="form-control"readonly/>
        </div>
        <div class="form-group">
          <label for="tel_neg">Teléfono del negocio</label>
          <input type="text" id="update_tel_neg" class="form-control"readonly/>
        </div>
        <div class="form-group">
          <label for="resena_neg">Reseña</label>
          <textarea style="text-transform:uppercase" id="update_resena_neg" class="form-control" readonly></textarea>
        </div>
        <!--boton wpp-->
     <div class="form-group">
      <center>
        
                <div id="btnws"></div>
         
        </div> 
      </div>
     
    </div>
  </div>
</div>
<!-- // Modal --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="js/script.js"></script> 
<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->


<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>