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

  <div class="container-fluid">
    

      <div class="row justify-content-center" id="centrado" style="margin-right: 0px;">
        <div class="card mb-3 border border-dark" style="max-width: 1200px;" id="ticket">
          <div class="row g-0 ">
            <div class="col-md-6">
              <div class="card-body ">
                <div>
                  <h5 class="card-title text-center fs-2">Tu pedido</h5>
                  <p class="card-title fs-4 fw-bold">Dirección  de entrega</p>
                  <p class="card-text">Av.De los Pelicanos Atras de Soriana Casa #2</p>
                </div>

                <h3 class="card-title fs-5 fw-bold">Metodo de pago</h3>
                <div class="card p-3 border-0 bg-transparent" style="max-width: 540px;">
                  <div class="row g-0">
                      <div class="row align-items-start p-2" style="margin-left: 25%; margin-top: -4%;"> 
                        <div class="col-3">
                          <button type="button" class="btn btn-outline-dark" onclick="ocultar();">Efectivo</button>
                        </div>
                        <div class="col-3">
                          <button type="button" class="btn btn-outline-dark" onclick="mostrar();">Tarjeta</button>
                        </div> 
                      </div>
                  </div>
                </div>

                <h3 class="card-title fs-5 fw-bold">Producto</h3>

                <div class="card border-0 bg-transparent" style="max-width: 540px;" id="producto">
                  <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo site_url("$ImagenProducto"); ?>" class="card-img-top imgCard" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <p class="card-text fw-bold"><?php echo $nombre_productos?></p>
                        <input type="number"  id="importe" class="form-control  bg-transparent border-0" style="width: 30%;" disabled>
                        
                          <div class="row g-0">
                            <div class="row align-items-start p-2" style="margin-left: 20%;"> 
                              <div class="col-2">
                                <button type="button" class="btn btn-outline-dark" style="margin-right: 7px; margin-left: 7px;"><i class="fa-solid fa-trash"></i></button>
                              </div>
                              <div class="col-2">
                                <button type="button" class="btn btn-outline-dark" id="menos"><i class="fa-solid fa-minus"></i></button>
                              </div>
                              <div class="col-2">
                                
                              </div>
                              <div class="col-2">
                                <button type="button" class="btn btn-outline-dark" id="mas"><i class="fa-solid fa-plus"></i></button>
                              </div>
                            </div>
                        </div>
                        
                        <input type="text" id="contador" class="form-control bg-transparent border-0" value="1" min="1" style="width: 20%; margin-left: 58%; margin-top: -13.5%;" disabled/>
                        <p style="margin-top: -23.3%;">$</p>
                        
                      </div>
                    </div>
                  </div>
                </div> 
 
                <h3 class="card-title fs-5 fw-bold">Propina</h3>
              
                <div class="card p-3 border-0 bg-transparent" style="max-width: 540px;">
                  <div class="row g-0">
                      <div class="row align-items-start p-2" style="margin-left: 15%;"> 
                        <div class="col-2">
                          <button type="button" class="btn btn-outline-dark">$4.00</button>
                        </div>
                        <div class="col-2">
                          <button type="button" class="btn btn-outline-dark">$15.00</button>
                        </div>
                        <div class="col-2">
                          <button type="button" class="btn btn-outline-dark">$50.00</button>
                        </div>
                        <div class="col-2">
                          <button type="button" class="btn btn-outline-dark">$100.00</button>
                        </div>
                      </div>
                      <div class="row align-items-start p-2" style="margin-left: 35%;">
                        <div class="col-5">
                          <button type="button" class="btn btn-outline-dark">Sin propina</button>
                        </div>
                      </div>
                  </div>
                </div>
              
                <h3 class="card-title fs-5 fw-bold">Resumen</h3>

                <div class="card mb-3 border-0 bg-transparent" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <p class="card-text">Costo del producto</p>
                      <p class="card-text">Tarifa de servicio</p>
                      <p class="card-text">Costo de envio</p>
                      <p class="card-text">Propina</p>
                    </div>
                    <div class="col-md-6">         
                        <p class="text-end">$110.00</p>
                        <p class="text-end">10.00</p>                 
                        <p class="text-end">$15.00</p>                  
                        <p class="text-end">$0.00</p>
                    </div>
                  </div>
                </div>

                <div class="col-4">
                  <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Pagar y Finalizar</button>
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
                          <a href="../index.html" class="btn btn-outline-success">Aceptar y salir</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
            
              </div>
            </div>

            <div class="col-md-6" id="data" style="margin-top: 15%;">
              <div class="card-body">
                <h5 class="card-title text-end fs-6">Pago seguro<i class="fa-solid fa-lock"></i></h5>
                <img src="../img/tarjetas.png" id="tarjeta">
                <p class="card-text fs-5">Titular de tarjeta</p>
                <div class="col-8">
                  <input class="form-control me-2">
                </div>
                <p class="card-text fs-5">Número de tarjeta</p>
                <div class="col-8">
                  <input class="form-control me-2">
                </div>

                <div class="row g-0" style="margin-left: -1.3%;">
                  <div class="row align-items-start p-2"> 
                    <div class="col-5">
                      <div class="card-text fs-5">
                        <p class="card-text">Fecha de vencimiento</p>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="card-text fs-5">
                        <p class="card-text">Código de seguridad</p>
                      </div>
                    </div> 
                  </div>
                </div>

                <div class="row g-0" style="margin-left: -1.3%;">
                  <div class="row align-items-start p-2"> 
                    <div class="col-5">
                      <input class="form-control me-2">
                    </div>
                    <div class="col-5">
                      <input class="form-control me-2">
                    </div> 
                  </div>
                </div>
                
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
