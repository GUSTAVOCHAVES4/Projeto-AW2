<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>

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

<!-- about section starts -->

<section class="about" id="about">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="images/moca-namaste.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>Sobre Nós</span>
                <h3>O seu refúgio de sabor. Cozinha autêntica, experiência memorável.</h3>
                <p>Bem-vindo ao Restaurante Chavitos, o seu refúgio de serenidade e sabor no coração da cidade. Aqui, nossa jornada culinária é mais do que uma simples refeição; é uma experiência para a alma.

O nome "Chavitos" é uma saudação que significa "a luz divina em mim saúda a luz divina em você". É essa filosofia que nos inspira a criar uma atmosfera calorosa e acolhedora, onde os sabores se entrelaçam com a espiritualidade.

Nossa culinária é uma celebração de cores, aromas e ingredientes naturais cuidadosamente selecionados. Cada prato é preparado com amor e dedicação, refletindo a riqueza das tradições culinárias de várias regiões do mundo.

No Restaurante Chavitos, não servimos apenas comida, mas sim uma experiência gastronômica que nutre o corpo e a mente. Nossa equipe dedicada está empenhada em proporcionar a você um serviço atencioso e uma refeição memorável, enquanto você relaxa em nosso ambiente tranquilo e encantador.

Acreditamos que a comida tem o poder de unir as pessoas e criar memórias duradouras. Portanto, estamos honrados em compartilhar nossa paixão pela culinária com você e sua família. Cada visita ao Chavitos é uma oportunidade de se conectar com a essência da vida e desfrutar de momentos especiais.

Seja para uma refeição íntima a dois, uma celebração em grupo ou apenas um momento de tranquilidade pessoal, estamos aqui para recebê-lo de braços abertos. No Restaurante Chavitos, não apenas alimentamos o seu corpo, mas também alimentamos a sua alma.

Chavitos, e que a luz divina em você encontre a paz e a alegria aqui conosco.</p>
                <a href="#contact" class="link-btn">Faça sua reserva</a>
            </div>

        </div>

    </div>

</section>

<!-- about section ends -->

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