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
    </div>
    </header>
<body>

<div class="card border-dark mb-3 text-dark bg-light mb-3" style="max-width: 30rem; margin-left: 37%; margin-top: 3%;">
  <div class="card-body">
    <h5 class="card-title fs-2 fw-bold">Tu Pedido</h5>
    <p class="fw-bold fs-6">Daniel Zamora Tapia</p>
    <p class="fw-light fs-6">Mon, Jul 6,2023 10:57 PM</p>
    <p class="card-text fs-6">Num de orden:117</p>
  </div>
  <div class="card-body">
  <h5 class="card-title fs-3 fw-bold">Articulos</h5>
    <p class="card-text">
    1 X
    Pizza Hawaiana 
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-plus"></i></button> 
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-minus"></i></button>
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-trash"></i></button>
    $220.00
    </p>
    <p class="card-text">
    3 X	
    Pizza Mixta
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-plus"></i></button> 
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-minus"></i></button>
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-trash"></i></button>
    $660.00
    </p>
    <p class="card-text">	
    2 X
    Pizza Dante
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-plus"></i></button> 
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-minus"></i></button>
    <button type="button" class="btn btn-light" style="width: 9%;"><i class="fa-solid fa-trash"></i></button>
    $440.00
    </p>
  </div>
  <div class="card-body">
  <h5 class="card-title fs-3 fw-bold">Metodo de Pago</h5>
  <button type="button" class="btn btn-light" style="width: 40%; margin-left: 2%;"  onclick="ocultar();"><i class="fa-solid fa-money-bill"></i></i>Efectivo</button> 
  <button type="button" class="btn btn-light" style="width: 50%;" onclick="mostrar();"><i class="fa-solid fa-credit-card"></i>Tarjeta de credito</button> 
  </div>

  <div class="col-4">
    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 190%;">Pagar y Finalizar</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Compra</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Se compra se ha realizado con exito
          </div>
          <div class="modal-footer">
            <a class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</a>
            <a href="<?php echo base_url(); ?>index.php/Pizzeria" class="btn btn-outline-success">Aceptar y salir</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card border-dark mb-3 text-dark bg-light mb-3 border-top-0" style="max-width: 30rem; margin-left: 37%; margin-top: -1%; display: none;" id="data">
  <div class="card-body">
  <h5 class="card-title fs-2 fw-bold">Datos de tarjeta</h5>
  <img src="<?php echo base_url();?>resources/img/tarjetas.png" id="tarjeta">
  </div>

  <div class="card-body">
    <p class="card-text">Nombre del títular</p>
    <input type="text" class="form-control">
    <p class="card-text">Apellídos del títular</p>
    <input type="text" class="form-control">
    <p class="card-text">Número de tarjeta</p>
    <input type="text" class="form-control">
  </div>

  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col">
          Expiración
          <input type="text" class="form-control">
        </div>
        <div class="col">
          C.de seguridad
          <input type="text" class="form-control">
        </div>
        <div class="col">
          C.Postal
          <input type="text" class="form-control">
        </div>
      </div>
    </div>
  </div>

  <div class="card-body">
    <p class="card-text">Email</p>
    <input type="text" class="form-control">
    <p class="card-text">Telefóno</p>
    <input type="text" class="form-control">
  </div>
  <div class="col-4">
    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 190%;">Pagar y Finalizar</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Compra</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Se compra se ha realizado con exito
          </div>
          <div class="modal-footer">
            <a class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</a>
            <a href="<?php echo base_url(); ?>index.php/Pizzeria" class="btn btn-outline-success">Aceptar y salir</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<!-- Bootstrap 5.0 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?php echo base_url();?>/resources/js/script.js"></script>
</html>
