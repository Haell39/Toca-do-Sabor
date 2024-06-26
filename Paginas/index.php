<?php
if (isset($_GET['message'])) {
    echo '<script>alert("' . htmlspecialchars($_GET['message']) . '");</script>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../CSS/Estilos.css" />
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <title>Toca Do Sabor</title>
    <h1 id="inicio"></h1>

    <style>
        .show {
            display: block !important;
        }
        .list-menu {
            display: none;
        }
        @media (min-width: 600px) {
            .list-menu {
                display: flex !important;
            }
        }
    </style>
</head>

<body>

    <header class="content">
         <div class="logo">
         <img src="../img/Logo.png"> 
        <h3>Toca Do Sabor</h3>
        </div>
         <nav>
          <ul class="list-menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#Sobre-Nos">Sobre nós</a></li>
            <li><a href="Cardápio.html">Cardápio</a></li>
            <li><a href="Avaliar.html">Avaliações</a></li>
            <li><a href="#Contatos">Contatos</a></li>
          </ul>
         </nav>
        
         <div class="menu-toggle">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
         </div>
    </header>

    <section class="first-section">
       <div class="conteudo-principal">
        <h1>Deixe seu dia mais saboroso!!!</h1>
        <h2>Os melhores lanches do Bairro e so aqui!</h2>
        <div class="btn">
        <a href="Cardápio.html"><button class="Montar">Peça ja o seu!</button></a>
       </div>
       </section>

       <section class="lol" id="lol">
       <div class="slider">

        <div class="slides">
    
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
    
            <div class="slide first">
                <img src="../img/img hamburguer.jpg" alt="imagem 1" />
            </div>
                 <div class="slide">
                <img src="../img/img brigadeiro.jpg" alt="imagem 2" />
            </div>
            <div class="slide">
                <img src="../img/img coca cola.webp" alt="imagem 3" />
            </div>
            <div class="slide">
                <img src="../img/img coxinha.webp" alt="imagem 4" />
            </div>
    
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
    
    </div>
    
    <div class="manual-navigation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
   
    </section> 
    
    </div>
    
    </div>

       <section class="sobre-nos" id="Sobre-Nos">
       <div class="main">
           <div class="contentsobre">
            <h2>Sobre nós</h2>
            <p>Bem-vindo(a) à nossa lanchonete! Aqui, acreditamos que uma boa refeição é mais do que apenas comida; é uma experiência que deve ser apreciada. Por isso, oferecemos uma variedade de pratos deliciosos, preparados com ingredientes frescos e de alta qualidade. Nosso menu inclui opções para todos os gostos, desde hambúrgueres suculentos até pratos saudáveis e vegetarianos.</p>
           </div>
           <div class="img-lanchonete">
            <img src="https://cdn-affml.nitrocdn.com/VYZKgTBWYRcKfLTJULspPnnEGgkXKvCN/assets/static/optimized/rev-83cbe48/wp-content/uploads/2019/08/marketing-para-lanchonete-1.jpg" alt="">
           </div>
       </div>
    </section>

    <section class="avaliacoes" id="Avaliar">
    <h2>Deixe seu Feedback</h2>
    <form action="process_feedback.php" method="post" onsubmit="return validateForm()">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback"></textarea>
        <input type="submit" value="Enviar">
    </form>
</section>




    <h1 id="Contatos"></h1>
    <footer>
        <div class="Contatos">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                        <img src="../img/Logo.png" alt="Logo" width="100" height="100">
                    </div>
                    <div class="btn-social">
                        <a href="https://www.instagram.com/" target="_blank"><button><i class="bi bi-instagram"></i></button></a>
                        <a href="https://www.facebook.com/?locale=pt_BR" target="_blank"><button><i class="bi bi-facebook"></i></button></a>
                        <a href="https://www.youtube.com/" target="_blank"><button><i class="bi bi-youtube"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="line-footer borda">
                <p><i class="bi bi-envelope-at-fill"></i> <a href="mailto:TocadoSabor@gmail.com">TocadoSabor@gmail.com</a></p>
                <p><i class="bi bi-telephone-fill"></i>(81)96255-1677</p> 
            </div>
        </div>
        <script src="../JS/menu.js"></script>
    </footer>
    <div id="sparkles"></div>
</body>
</html>
