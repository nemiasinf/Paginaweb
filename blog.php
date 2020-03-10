<?php
  //Variables del Header
  $title = 'Blog de CCI';
  $description =  'Descubre lo que hacemos y nuestros proyectos';
  $current_page = 'blog';
?>

<?php include 'header.php';?>

<main>
  <section id="title">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset>Descubre lo que hacemos y nuestros proyectos</h1>
        </div>
      </div>
      <div class="orange-separator"></div>
    </div>
  </section>

  <section id="blog_img" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
    <div class="container">
      <div class="img"></div>
    </div>
  </section>

  <section id="services_list">
    <div class="container" >

<!--Inicio de sección-->
      <div class="row" id="blogb">
        <div class="col-md-4 col-xs-10 images wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200" >
         <br>  <a href="blogs/domotica.php"> <img id="blogi"  src="img/blog/domotica/domotica.jpg"></a>
        </div>
        <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <h2>Domótica:</h2>
          <p >
            <b id="titulo"><a href="blogs/domotica.php"> ¿Qué es la dómotica, para qué sirve y quién la provee?</a></b><br><a href="blogs/domotica.php" title="Leer Más" id="link" style="color: black;">
                          Desde encender alguna bombilla desde una habitación distinta hasta abrir las puertas de la oficina remotamente, la domótica ofrece la posibilidad de combinar acciones simples con la capacidad de automatización.
                            </a>


          </p>
        </div>
      
      </div>
       <hr>
       <!--Fin de sección-->
<!--Inicio de sección-->
      <div class="row" id="blogb">
        <div class="col-md-4 col-xs-10 images wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200" >
         <br>  <a href="blogs/hidrosanitario.php"> <img id="blogi"  src="img/blog/hidrosanitario/menu.jpg"></a>
        </div>
        <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <h2>Hidrosanitarios:</h2>
          <p >
            <b id="titulo"><a href="blogs/hidrosanitario.php"> Explicación e implementación de los hidrosanitarios</a></b><br><a href="blogs/hidrosanitario.php" title="Leer Más" id="link" style="color: black;">
                          El hidrosanitario es una de las partes más importante al momento de crear una edificación.<br>
            El agua potable llega a todas las partes de una edificación mediante la implementación de tuberías durante la creación y desarrollo de la infraestructura en general.
                            </a>


          </p>
        </div>
      
      </div>
       <hr>
       <!--Fin de sección-->

       <!--Inicio de sección-->
      <div class="row" id="blogb">
        <div class="col-md-4 col-xs-10 images wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200" >
         <br>  <a href="blogs/site.php"> <img id="blogi"  src="img/blog/site/menu.jpg"></a>
        </div>
        <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <h2>SITE de Telecomunicaciones:</h2>
          <p >
            <b id="titulo"><a href="blogs/site.php"> ¿Qué es un SITE de telecomunicaciones?</a></b><br><a href="blogs/site.php" title="Leer Más" id="link" style="color: black;">
                          A travez de ésta sala es dónde se colocan todos los dispositivos que controlan la red de un edificio, empresa o institución pública.<br>
              A demás es aquel lugar dónde existe la posibilidad de añadir nuevas facetas tecnológicas para nuestra empresa en constante crecimiento.<br>
                            </a>


          </p>
        </div>
      
      </div>
       <hr>
       <!--Fin de sección-->




        </div>
    
  </section>

</main>

<?php include 'footer.php';?>