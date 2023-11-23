<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações</title>

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


<!-- reviews section starts -->

<section class="reviews" id="reviews">

    <h1 class="heading">Avaliações de Clientes</h1>

    <div class="box-container container">

        <!-- Exibição das Avaliações -->
        <?php
        // Conexão com o banco de dados (substitua pelas suas configurações)
        $conn = mysqli_connect('localhost', 'root', '', 'reviews_db') or die('connection failed');

        // Consulta SQL para recuperar as avaliações
        $query = "SELECT * FROM reviews_form";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($conn));
        }

        // Exibir as avaliações
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="box">';
            echo '<p>' . $row['review'] . '</p>';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<span>' . $row['data'] . '</span>';
            echo '</div>';
        }
        ?>

    </div>

</section>

<!-- reviews section ends -->

<!-- Formulário de Avaliação -->
<section class="contact" id="contact">
    <h1 class="heading">Deixe sua Avaliação</h1>

    <?php
    // Verificar se o formulário foi enviado
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $rating = $_POST['rating'];
        $review = trim($_POST['review']);

        // Verificar se os campos obrigatórios estão preenchidos
        if(empty($name) || empty($rating) || empty($review)){
            echo '<p class="message">Por favor, preencha todos os campos obrigatórios.</p>';
        } else {
            // Conexão com o banco de dados (substitua pelas suas configurações)
            $conn = mysqli_connect('localhost', 'root', '', 'reviews_db') or die('connection failed');

            $review = mysqli_real_escape_string($conn, $_POST['review']);

            // Inserir avaliação no banco de dados
            $insert = mysqli_query($conn, "INSERT INTO reviews_form (name, rating, review, data) VALUES ('$name', '$rating', '$review', NOW())");

            if ($insert) {

                // Configurar cookies para armazenar informações
                setcookie('user_name', $name, time() + 5, '/');
                setcookie('user_rating', $rating, time() + 5, '/');
                setcookie('user_review', $review, time() + 5, '/');

                echo '<p class="message">Avaliação feita com sucesso!</p>';
            } else {
                echo '<p class="message">Erro ao fazer a avaliação.</p>';
            }
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return handleFormSubmit();">
        <span>Seu Nome:</span>
        <input type="text" name="name" placeholder="Insira seu nome" class="box" required>
        <span>Sua Avaliação:</span>
        <textarea name="review" placeholder="Digite sua avaliação" class="box" required></textarea>
        <span>Classificação:</span>
        <select name="rating" class="box" required>
            <option value="1">1 Estrela</option>
            <option value="2">2 Estrelas</option>
            <option value="3">3 Estrelas</option>
            <option value="4">4 Estrelas</option>
            <option value="5">5 Estrelas</option>
        </select>
        <input type="submit" value="Enviar Avaliação" name="submit" class="link-btn">
    </form>

    <p>Avaliação feita por: <?php echo isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : ''; ?></p>
    <p>Classificação: <?php echo isset($_COOKIE['user_rating']) ? $_COOKIE['user_rating'] : ''; ?></p>
    <p>Avaliação: <?php echo isset($_COOKIE['user_review']) ? $_COOKIE['user_review'] : ''; ?></p>

     
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
