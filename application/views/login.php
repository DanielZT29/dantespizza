
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" >
    <title>Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo site_url("Loguear/login"); ?>" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="Usuario" id="username" >
                        <label for="">User</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password"  name="Password"id="password" >
                        <label for="">Password</label>
                    </div>
                    
                    <button type="submit">Iniciar Sesion</button>
                    <div class="register">
                        <p>Don't have a account <a href="<?php echo base_url(); ?>index.php/registros" >Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
