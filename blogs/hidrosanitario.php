<?php
  //Variables del Header
  $title = 'Hidrosanitarios';
  $description =  'Hidrosanitarios en tu empresa';
//No cambiar ya que es el que mantiene el menú superior seleccionando en la pestaña de "blog"  
  $current_page = 'blog';
?>

<?php include '../header.php';?>

<main>
  <section id="title">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset>Explicación e implementación de los hidrosanitarios</h1>
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
  <section id="hidro_img" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
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
          <h2>Hidrosanitarios</h2>
          <p>
            <b id="titulo">Una de las partes más importante al momento de crear una edificación</b><br>
            El agua potable llega a todas las partes de una edificación mediante la implementación de tuberías durante la creación y desarrollo de la infraestructura en general.<br>
            De igual manera ésta debe buscar una salida, ya que tras su uso ésta se deshecha y extrae de la edificación para proceder hacia los alcantarillados<br>
            La instalación de ésta parte dentro de la edificación debe ser bien medida desde el momento de realización de los planos ya que la implementación tendra el mayor cuidado posible, sin embargo existen casos en los que se implementan después de ya creadas ciertas estructuras, principalmente en hogares o en remodelaciones<br>

          </p>
        </div>

        <!--Primera imagen lateral-->
        <div class=" col col-md-5 col-xs wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <img id="blogis" src="../img/blog/hidrosanitario/hidro.jpg">
        </div>
      
      </div>

      <!--Segundo parrafo-->
      <div class="col">
        <h2>¿Qué se necesita para instalar un sistema hidrosanitario?</h2>
        <p>
            <br>
            <b id="titulo"> Componentes principales</b><br>
            • Materiales para instalaciones hidraulicas.<br>
            • Materiales para instalaciones sanitarias.<br>
            • Válvulas.<br><br>
            <b id="titulo"> Tipos de tuberías de plástico</b><br>
            • PVC.<br>
            • PBT.<br>
            • PEX.<br><br>
            <b id="titulo"> Materiales para instalaciones sanitarias<br></b>
            • Tubería Novafort PAVCO.<br>
            • Asbesto-Cemento.<br>
            <br>


            <b id="titulo">
            </b>

          </p>

      </div>


      <!--Parrafo final-->
      <div class="col"> 
        <h2>Instalaciones hidrosanitarias en Cancún</h2>
        <p>
          <b id="titulo"></b> 
        Para realizar la instalación de éste servicio necesitamos contar con profesionales que tengan la capacidad de leer planos y especificaciones y que a lavez comprendan el proceso constructivo de éste servicio, empresas como <a href="http://www.ccitecnologia.com.mx"><b id="titulo">CCI Tecnología</b></a> que cuenta con años de experiencia y diferentes proyectos, de la mano de sus profesionales trabajadores, desarrollan e implementan en tu empresa el sistema hidrosanitario de forma impecable.
        </p>
      </div>

      <!--Imagen inferior-->
      <div class="col"> 
      <img  src="../img/blog/hidrosanitario/down.jpg" style="background-size: contain; position: center no-repeat ; width: 100%; ">
      </div>
      


        <!--Línea de cierre de blog-->
       <hr>



        <!--Botón para regresar al menú de Blogs-->
    
       <a href="../blog.php"><button class="button" style="vertical-align:middle"><span></span>Regresar</button></a>
        </div>
    
  </section>

</main>

<?php include '../footer.php';?>