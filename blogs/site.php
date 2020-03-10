<?php
  //Variables del Header
  $title = '¿Qué es un SITE de telecomunicaciones?';
  $description =  'El SITE es la parte más importante cuando de una empresa moderna hablamos';
//No cambiar ya que es el que mantiene el menú superior seleccionando en la pestaña de "blog"  
  $current_page = 'blog';
?>

<?php include '../header.php';?>

<main>
  <section id="title">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset>¿Qué es un SITE de Telecomunicaciones?</h1>
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
  <section id="site_img" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
      <div class="container" >
         <div class="img"></div>
       </div>
  </section>
  <section id="services_list">

    <!-- CUERPO DEL BLOG -->
    <div class="container" >
      <!--El id "blogb" hace referencia a la hoja de estilo en ../css/the_one_min.css  -->
      <div class="row" id="blogis">
        <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <h2>¿Qué es un SITE de telecomunicaciones?</h2>
          <p>
            <b id="titulo">Es la parte central en una empresa moderna. </b><br>
            A travez de ésta sala es dónde se colocan todos los dispositivos que controlan la red de un edificio, empresa o institución pública.<br>
            A demás es aquel lugar dónde existe la posibilidad de añadir nuevas facetas tecnológicas para nuestra empresa en constante crecimiento.<br>
            Si bien cada empresa debería contar con un SITE no todas saben cómo empezar o a quién contratar para realizar ésta implementación, sin embargo te ofrecemos un poco del material necesario para hacer tu propio SITE de telecomunicaciones.

          </p>
        </div>

        <!--Primera imagen lateral-->
        <div class=" col col-md-5 col-xs wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <img id="blogis" src="../img/blog/site/site1.jpg">
        </div>
      
      </div>

      <!--Segundo parrafo-->
      <div class="col">
        <h2>Componentes el principales para un SITE</h2>
        <p>
            <br>
            <b id="titulo"> Componentes electricos</b><br>
            • Switch.
            <br>
            • Servidor físico.
            <br>
            • Cables de Red.
            <br>
            • Conexiones.
            <br>
            • Router.
            <br>
            <b id="titulo"> Componentes físicos</b><br>
            • Rack.
            <br>
            • Charolas de uso multiple.
            <br>
            • Barras multicontactos.
            <br>
            • Backbone.
            <br>
            • Charola malla.
            <br>
            <b id="titulo"> Componentes estructurales<br></b>
            • Instalación de techo falso.
            <br>
            • Instalación del cableado estructurado y ponchado.
            <br>
            • Tuberías de cableado.
            <br>
            • Canalización o instalación electrica interna.
            <br>
            • 
            <br>
            <b id="titulo">
            </b>

          </p>

      </div>


      <!--Parrafo final-->
      <div class="col"> 
        <h2>¿Cómo implementar un SITE?</h2>
        <p>
          <b id="titulo"> Tu empresa puede hacerlo siendo una edificación nueva hasta sí es una empresa queriendo renovar </b> 
         <br><br>
          Una empresa nueva debería considerar desde el inicio implementar un SITE ya que será parte importante de su crecimiento y su buen funcionamiento interno dependerá en su mayoría de ésta.<br>
          En caso de tratarse de una empresa ya existente, también debería considerar integrar esto ya que se notará en muy poco tiempo cómo la empresa empieza a tener cierta estabilidad que no tenía antes.<br>
          Para ambos casos <a href="http://www.ccitecnologia.com.mx"><b id="titulo">CCI Tecnología</b></a> es una de las mejores opciones para implementar un SITE de Telecomunicaciones en Cancún, Tulum, Playa del Carmen o Mérida.
        </p>
      </div>

      <!--Imagen inferior-->
      <div class="col"> 
      <img  src="../img/blog/site/site2.jpg" style="background-size: contain; position: center no-repeat ; width: 100%; ">
      </div>
      


        <!--Línea de cierre de blog-->
       <hr>



        <!--Botón para regresar al menú de Blogs-->
  
       <a href="../blog.php"><button class="button" style="vertical-align:middle"><span></span>Regresar</button></a>
        </div>
    
  </section>

</main>

<?php include '../footer.php';?>