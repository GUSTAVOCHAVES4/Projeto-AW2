<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chavitos</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section starts -->

<header class="header fixed-top">

    <div class="container">
        
        <div class="row align-items-center justify-content-between">

        <a href="index.php" class="logo">Chav<span>itos</span></a>

        <nav class="nav">
            <a href="websitemap.php">Mapa do Site</a>
            <a href="index.php">Página Inicial</a>
            <a href="menu.php">Cardápio</a>
            <a href="about.php">Sobre Nós</a>
            <a href="reviews.php">Avaliações</a>
            <a href="reservation.php">Reserva</a>
            <a href="home.php">Visualizar Perfil</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </div>

</div>

</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
 
    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Entre em contato com sua espiritualidade</h3>
                <p>Namastê é uma saudação que significa "a luz divina em mim saúda a luz divina em você". É essa filosofia que nos inspira a criar uma atmosfera calorosa e acolhedora, onde os sabores se entrelaçam com a espiritualidade.</p>
                <a href="reservation.php" class="link-btn">Faça sua reserva</a>
            </div>
        </div>

    </div>

</section>

<!-- home section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="box-container container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Telefone</h3>
            <p>+123-456-7890</p>
            <p>+111-222-333</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Endereço</h3>
            <p>Keizergracht, Amsterdã - 22205-330</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Horário de Funcionamento</h3>
            <p>8h às 22h</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>chavitos@gmail.com</p>
            <p>chavitos2@gmail.com</p>
        </div>

    </div>

    <div class="credit"> &copy; copyright @<?php echo date('Y'); ?> by <span>Gustavo Chaves</span> </div>

</section>

<!-- footer section ends -->

<!-- custom js file link -->
<script src="js/script.js"></script>
    
</body>
</html>