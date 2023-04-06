<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/style.css" >
    <title>Login</title>
</head>
<body>
    <section>
        <div class="form-boxx">
            <div class="form-value">
                <form action="<?php echo site_url("Registraruser/save"); ?>" method="post">
                    <h2>Registro</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="nombre" name="nombre" >
                        <label for="">Nombre</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="apellido" name="apellido" >
                        <label for="">Apellido</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="correo" >
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password"  name="contraseña" >
                        <label for="">Password</label>
                    </div>
                   
                    <button type="submit">Iniciar Sesion</button>
                    
                    <div class="register">
                        <p>Do you already have an account? <a href="<?php echo base_url(); ?>index.php/iniciosesion">Login</a></p>
                    </div>
                </form>
                 
            </div>
        </div>
    </section>
</body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>