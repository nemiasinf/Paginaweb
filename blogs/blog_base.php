<?php
  //Variables del Header
  $title = 'Título superior en Chrome';
  $description =  'Descripcion corta del tema';
//No cambiar ya que es el que mantiene el menú superior seleccionando en la pestaña de "blog"  
  $current_page = 'blog';
?>

<?php include '../header.php';?>

<main>
  <section id="title">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset>Título principal del blog</h1>
        </div>
      </div>
      <div class="orange-separator"></div>
    </div>
  </section>
            <!-- Aquí editas el banner que está referenciado con el id "blog_img", se edita en el archivo ../css/the_one_min.css
            y se insertará de la siguiente manera, cambiando la palabra "blog" en el ID al nombre que quieras:



    section#blog_img .container .img {
    position: top;
    height: 300px;
    width: 100%;


    -----AQUÍ CAMBIAMOS LA DIRECCIÓN DE LA IMAGEN------------------
    ----------------------------|----------------------------------
    ----------------------------|----------------------------------
    ----------------------------|----------------------------------
    ----------------------------|----------------------------------
    ----------------------------|----------------------------------
    ----------------------------V----------------------------------
    background: url(../img/blog/bannerd.jpg) no-repeat center center;

    background-size:cover;
}
-->



<!--También cambiar el sufijo "blog" en el id de esta línea-->
  <section id="blog_img" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
    <div class="img"></div>
  </section>
  <section id="services_list">

    <!-- CUERPO DEL BLOG -->
    <div class="container" >
      <!--El id "blogb" hace referencia a la hoja de estilo en ../css/the_one_min.css  -->
      <div class="row" id="blogis">
        <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <h2>Subtítulo del blog:</h2>
          <p>
            <b id="titulo">Ingresar texto aquí</b><br>

          </p>
        </div>

        <!--Primera imagen lateral-->
        <div class=" col col-md-5 col-xs wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <img id="blogis" src="../img/blog/domotica/foco.jpg">
        </div>
      
      </div>

      <!--Segundo parrafo-->
      <div class="col">
        <h2>Subtitulo 2</h2>
        <p>
            <br>
            <b id="titulo"> Tema 1</b><br>
            Texto 
            <b id="titulo"> Tema 2</b><br>
            Texto
            <b id="titulo"> Tema 3<br></b>
            • Texto
            <br>


            <b id="titulo">
            </b>

          </p>

      </div>


      <!--Parrafo final-->
      <div class="col"> 
        <h2>Parrafo final</h2>
        <p>
          <b id="titulo"> Parrafo para mencionar a CCI DESARROLLO </b> 
         Texto<br><br>
          Texto<br> <a href="http://www.ccitecnologia.com.mx"><b id="titulo">CCI Tecnología</b></a> Texto
        </p>
      </div>

      <!--Imagen inferior-->
      <div class="col"> 
      <img  src="../img/blog/domotica/down.jpg" style="background-size: contain; position: center no-repeat ; width: 100%; ">
      </div>
      


        <!--Línea de cierre de blog-->
       <hr>



        <!--Botón para regresar al menú de Blogs-->
  
       <a href="../blog.php"><button class="button" style="vertical-align:middle"><span></span>Regresar</button></a>
        </div>
    
  </section>

</main>

<?php include '../footer.php';?>