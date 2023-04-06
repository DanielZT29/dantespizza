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
                <a class="nav-link active" href="<?php echo base_url(); ?>index.php/Pizzeria">Inicio</a>
              </li>
              <li class="nav-item">
			  <a class="nav-link active" href="<?php echo base_url(); ?>index.php/vistamenu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url(); ?>index.php/sucursales">Sucursales</a>
              </li>
            </ul>
            <form class="d-flex" >
                <a  class="btn btn-success" >Carlos</a>
                <a href="<?php echo base_url(); ?>index.php/carrito" class="nav-link active" id="user"><i class="fa-solid fa-cart-shopping"></i></a>
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
		
  
      
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="height: 100%; margin-top: 5%;">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
          <img src="<?php echo base_url();?>resources/img/tarjetas.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
          <img src="<?php echo base_url();?>resources/img/tarjetas.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"  data-bs-interval="2000">
          <img src="<?php echo base_url();?>resources/img/tarjetas.png" class="d-block w-100" alt="...">
          </div>
        </div>
       
        
      </div>

      

      <div class="card mb-3 border-0 bg-transparent" style="max-width: 1500px; margin-left: 13%;">
        <div class="row"> 
          <div class="col-3" style="margin-top: 6%;">
            <h5 class="text-center fs-3">Contactos</h5>
            <p class="card-text" id="contactanos"><a href=""><i href="#"class="fa-brands fa-whatsapp" id="wasa"></i></a>3148238234</p>
            <p class="card-text" id="contactanos"><a href=""><i class="fa-brands fa-facebook" id="feis"></i></a>Hamburguesas y Pizzas Dante</p>
            <p class="card-text" id="contactanos"><a href=""><i class="fa-regular fa-envelope" id="gma"></i></a>pizzasDantes@gmail.com</p>
          </div>
          <div class="col-3" style="margin-top: 6%;">
            <h5 class="text-center fs-4">Si tienes algun comentario<br>no dudes en escribirnos</h5>
            <div class="col-11">
              <input class="form-control me-2" placeholder="Correo Electronico">
            </div> 
            <div class="row g-0" style="margin-left: -2%;">
              <div class="row align-items-start p-2"> 
                <div class="col-6">
                  <input class="form-control me-2" placeholder="Nombre">
                </div>
                <div class="col-6">
                  <input class="form-control me-2" placeholder="Apellido">
                </div> 
              </div>
            </div>
            <div class="col-11">
              <textarea class="form-control" aria-label="With textarea" placeholder="Comentario"></textarea>
            </div> 
            <button type="button" class="btn btn-success" style="margin-top: 1%; margin-left: -3%;">Enviar</button>
          </div>
          <div class="col-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15092.983633364658!2d-103.95447209999999!3d18.9647442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x843aca49f3cd1b07%3A0xd570d1c50cb0455b!2sHamburguesas%20Y%20Pizzas%20Dante!5e0!3m2!1ses!2smx!4v1678758012974!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
  </div>





</body>

	</body>


    <!-- Js link -->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Bootstrap 5.0 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
