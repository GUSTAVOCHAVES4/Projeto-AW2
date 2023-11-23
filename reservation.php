<?php

$conn = mysqli_connect('localhost','root','','reservation_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `reservation_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'Reserva feita com sucesso!!!';
    }else{
        $message[] = 'Falha na reserva';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>

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

<!-- contact section starts -->

<section class="contact" id="reservation">
    <h1 class="heading">Faça sua reserva aqui!</h1>

    <?php
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $number = trim($_POST['number']);
        $date = trim($_POST['date']);

        // Verifica se os campos obrigatórios estão preenchidos
        if(empty($name) || empty($number) || empty($date)){
        }

        // Verifique o formato do email
        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        }
    }
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            if(isset($message)){
                foreach($message as $msg){
                    echo '<p class="message">'.$msg.'</p>';
                }
            }
        ?>
        <span>seu nome:</span>
        <input type="text" name="name" placeholder="Insira seu nome" class="box" required>
        <span>seu email:</span>
        <input type="email" name="email" placeholder="Insira seu email" class="box" required>
        <span>número de pessoas:</span>
        <input type="number" name="number" placeholder="Quantas pessoas?" class="box" required max="4">
        <span>data e hora da reserva:</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="Reservar" name="submit" class="link-btn">
    </form>
     
</section>

<!-- contact section ends -->

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