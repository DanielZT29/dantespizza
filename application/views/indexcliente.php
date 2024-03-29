
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/style.css" >

    <!-- Remixicons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Boxicons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Google-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <title>DantesPizzas</title>
</head>
<body>

    <header>

        
    <a href="#"><img src="<?php echo base_url();?>resources/img/logo.png" class="logo"></a>
        
        <ul class="navbar">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Sucursales</a></li>
        </ul>
        <div class="main">
        <?php $number=0; foreach($data as $key => $value):?>
            <a ><?php echo$value->nombre_usuario; ?></a>

            <a href="<?php echo site_url("Loguear/salir"); ?>">   
                <span>
                     Salir
                </span>
            </a>

            <a href="#" class="cart"><i class="ri-shopping-cart-line"></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
            <?php endforeach;?>
        </div>
    </header>
    
    <!-- Js link -->
    <script src="<?php echo base_url();?>resources/js/script.js"></script>
</body>
</html>