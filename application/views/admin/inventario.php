<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" >
  
    <!-- Bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <title>Document</title>
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
                <a  class="btn btn-success" >
                <?php echo $this->session->userdata("usuario") != null ? $this->session->userdata("usuario"):'';?>
                </a>
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
    


    <div class="row justify-content-center" id="centrado">
        <div class="card mb-3 border border-dark" style="max-width: 1200px;" id="ticket"><br>
            <div class="row g-0">

                <!-- Button trigger modal -->

                <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    +Agregar
                </button>

                <!-- Modal agregar -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <form method="post" action="<?php echo site_url().'/admin/C_inventario/guardarProducto/';?>">
                            </div>
                            <div class="modal-body">
                                <label for="exampleDataList" class="form-label">Nombre:</label>
                                <input name="Nombre" class="form-control" list="datalistOptions" id="exampleDataList"
                                    placeholder="Nombre">
                                <br>
                                <label for="exampleDataList" class="form-label">Cantidad:</label>
                                <input name="cantidadProducto" class="form-control" list="datalistOptions" id="exampleDataList"
                                    placeholder="Cantidad">
                                <br>
                                <label for="exampleDataList" class="form-label">Precio Unitario:</label>
                                <input name="PrecioUnitario" class="form-control" list="datalistOptions" id="exampleDataList"
                                    placeholder="Precio Unitario">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Editar -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                    <?php foreach($Inventario as $inventario){?>
                                <form action="<?php echo base_url(); ?>index.php/admin/C_inventario/updateProducto/<?php echo $inventario->id_inventario;?>"class="" method="POST">
                            </div>
                            <div class="modal-body">
                                <div class="input-group input-group-outline <?php echo isset($inventario) ? 'is-filled':'' ?>"></div>  
                                <label for="exampleDataList" class="form-label">Nombre:</label>
                                <input name="Nombre" class="form-control" list="datalistOptions" id="exampleDataList"placeholder="Nombre" value="<?php echo isset($inventario) ? $inventario->Nombre:''; ?>">
                                <br>
                                <label for="exampleDataList" class="form-label">Cantidad:</label>
                                <input name="cantidadProducto" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Cantidad" value="<?php echo isset($inventario) ? $inventario->cantidadProducto:''; ?>">
                                <br>
                                <label for="exampleDataList" class="form-label">Precio Unitario:</label>
                                <input name="PrecioUnitario" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Precio Unitario" value="<?php echo isset($inventario) ? $inventario->PrecioUnitario:''; ?>">
                            </div>
                             
                            <?php
                            echo isset($inventario) ?
                            '<input type="hidden" name="id_inventario" class="form-control" value="'.$inventario->id_inventario.'">'
                            :'';
                          ?>
                         
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                                <?php } ?>
                            </div>
                           
                        </div>
                    </div>
                </div>
                     
                <!-- Tabla del inventario -->
                <div class="col-md-12">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Inventario as $inventario){?>
                                <tr>

                                    <td> <?php echo $inventario->id_inventario; ?> </td>
                                    <td> <?php echo $inventario->Nombre; ?> </td>
                                    <td> <?php echo $inventario->cantidadProducto; ?> </td>
                                    <td> <label>$</label> <?php echo $inventario->PrecioUnitario; ?> </td>
                                    <td>
                                    <!-- Botones de editar y eliminar productos -->
                                        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="">Editar</a>
                                        <a href=" <?php echo base_url(); ?>index.php/admin/C_inventario/borrarProducto/<?php echo $inventario->id_inventario;?>"class="btn btn-danger">Borrar</ion-icon></a>
                                    </td>
                                </tr>
                                <?php } ?>
                        </table>
                    </div>
                </div>

                </tbody>


</body>

</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
</div>
</div>
</div>
</div>
</div>




</body>

<!-- Bootstrap 5.0 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>


</html>