<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" >
   <!-- Bootstrap 5.0 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>DantesPizzas</title>

</head>
<header>

       
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fs-5">
	<a href="<?php echo base_url(); ?>index.php/Pizzeria"><img src="<?php echo base_url();?>resources/img/logo.png" class="logo"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navtext">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url(); ?>index.php/ainventario">Inventario</a>
              </li>
              <li class="nav-item">
			  <a class="nav-link active" href="<?php echo base_url(); ?>index.php/amenu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url(); ?>index.php/asucursales">Sucursales</a>
              </li>
            </ul>
            <form class="d-flex" >
                <a  class="btn btn-success" >Admin</a>
                <a href="<?php echo site_url("Loguear/salir"); ?>">   
                <span class="btn btn-success">
                     Salir
                </span>
            </a>
                
            </form>
          </div>
      </nav> 
    </header>
<body>
   
    <!-- Lista de cards-->
    
    <div class="container" id="centrado">
        <div class="menu">
        <a href="<?php echo base_url(); ?>index.php/amenu ">Pizza</a>
            <a href=" <?php echo base_url(); ?>index.php/ahamburguesas">Hamburguesas</a>
            <a href="<?php echo base_url(); ?>index.php/aburritos">Burritos</a>
             <a href=" <?php echo base_url(); ?>index.php/aotros">Otros</a>
        </div>
    
    <br>
    


        <div class="row row-cols-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4">

        <a href="<?php echo base_url(); ?>index.php/crearpizza"" class="btn btn-outline-success" style="margin-left: 66%; margin-top: 1%;">Crear nueva pizza</a>
        


        <?php $number=0; foreach($data as $key => $value):?>
              <div class="col">
                  <div class="card h-100" id="animacion" >  
                          <img src="<?php echo"$value->ImagenProducto"; ?>" class="card-img-top imgCard" alt="...">

                          <div class="card-body">
                              <h5 class="card-title"name="nombre">
                                  <?php echo$value->nombre_productos; ?>
                              </h5>

                              <p class="card-text">
                                 <?php echo$value->Descripcion; ?>
                              </p>
                              <p class="card-text" name="precio">
                                 <?php echo$value->Precio; ?>
                              </p>

                              <div class="row">
                                  <div class="col">
                                      <p class="card-text text-end" >
                                          Codigo: <?php echo$value->id_productos; ?>
                                      </p>
                                  </div>
                                  
                                  

                              </div>
                              
                          </div>
                      </a>
                  </div>
              </div>
              <?php endforeach;?>
      </div>
        
    </body>
    <!-- Js link -->
    <script src="<?php echo base_url();?>resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>
