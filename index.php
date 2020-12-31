<?php
$a = 0;
include 'contador.php';
if (isset($_COOKIE['counte'])) {
  $counte = $_COOKIE['counte'] + 1;
}else{
$counte = 1;
$a++; 
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
 $ss ='<?php $a='.$a.'; ?>';
 $escreve =fwrite($abre, $ss);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Marina</title>

  <!-- Bootstrap Core CSS teste-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS  -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">



</head> 
<body id="page-top">

</body>
</html>

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">INÍCIO</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">FOTINHAS</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">NOSSOS MOMENTOS</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="https://adrielmodollo.github.io/declaracao/amor.html">JOGUINHO</a>
      </li>
    </ul>
  </nav>


  <!-- Header fwqet23-->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Te amo</h1>
      <h3 class="mb-5">
        <em>Para você meu amor</em>
      </h3>
      
      <input class="btn btn-primary btn-xl js-scroll-trigger" value ="Veja nossos Momentos" onclick ="reciproco()"> </a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Fotinhas -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Veja alguns de nossos momentos juntinhos. Não me mata! rsrsrs </h3>
        <h2 class="mb-5">Muito amor</h2>
      </div>
      <div class="row">

        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <img src="img/1.jpeg" width=290 height=290>
        </div>

        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <img src="img/2.jpeg" width=290 height=290>
        </div>

        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <img src="img/3.jpeg" width=290 height=290>         
        </div>

        <div class="col-lg-3 col-md-6">
          <img src="img/4.jpeg" width=290 height=290>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Nossos vídeos</h3>
        <h2 class="mb-5">Momentos</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <iframe width="380" height="300" src="https://www.youtube.com/embed/4O9pvuy-LQI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
           <iframe width="380" height="300" src="https://www.youtube.com/embed/PfDVTirXDio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <iframe width="380" height="300" src="https://www.youtube.com/embed/XNLo9Uy2nY0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <iframe width="380" height="300" src="https://www.youtube.com/embed/8gCm0fRWe6U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->

 <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">Os botões abaixo são impossíveis de resistir ......</h2>
      <div id="divConteudo">
      <iframe width="380" height="305" src="https://www.youtube.com/embed/1c8XBwXrm2M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </div>
     <button  id="btnMostrarEsconder" class="btn btn-xl btn-light mr-4" type="button">Clique em mim!</button>
     
      <a href="https://www.facebook.com/drielmodollo/posts/638397890399167" class="btn btn-xl btn-dark">Olhe para mim!</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/drielmodollo/">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Your Website 2020</p>
      
      <p class="text-muted small mb-0"> <?php 
      echo "<br>$a Pessoas visitaram esse site e você já visitou " .$counte. " vezes"?>
    
  <?php $a=0; ?>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

  <!-- JS Edição -->
  <script type="text/javascript" src="validacao.js"></script>

  <!-- Animação vídeo -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="video/iFrameVideo.js"></script>

</body>

</html>
