<?php
  //Variables del Header
  $title = 'Sistemas Tecnológicos de Vanguardia - CCI';
  $description =  'Somos una empresa conformada por grupos de expertos dedicados a brindar soluciones a tus requerimientos en proyectos de construcción, mantenimiento, sistemas eléctricos, obra civil y edificios inteligentes.';
  $current_page = 'inicio';
?>

<?php include 'header.php';?>

<main>
  <section id="home_slide" class="wow fadeIn" data-wow-duration="4s" data-wow-delay="0.4s">
    <div class="container">
      <div class="slider">
       <img class="slide w3-animate-right" src="img/electrificacion.jpg">
         <img class="slide1 w3-animate-out" src="img/obra.jpg">
       

        <img class="slide w3-animate-right" src="img/telematica.jpg">
         <img class="slide1 w3-animate-out" src="img/electrificacion.jpg">
     

        <img class="slide w3-animate-right" src="img/fibra.jpg">
           <img class="slide1 w3-animate-out" src="img/telematica.jpg">
      
         
       <img class="slide w3-animate-right" src="img/cctv.jpg">
          <img class="slide1 w3-animate-out" src="img/fibra.jpg">

        <img class="slide w3-animate-right" src="img/domotica.jpg">
          <img class="slide1 w3-animate-out" src="img/cctv.jpg">

        <img class="slide w3-animate-right" src="img/paneles.jpg">
          <img class="slide1 w3-animate-out" src="img/domotica.jpg">

        <img class="slide w3-animate-right" src="img/proyectos.jpg">
          <img class="slide1 w3-animate-out" src="img/paneles.jpg">

        <img class="slide w3-animate-right" src="img/sanitarios.jpg">
          <img class="slide1 w3-animate-out" src="img/proyectos.jpg">

        <img class="slide w3-animate-right" src="img/obra.jpg">
          <img class="slide1 w3-animate-out" src="img/sanitarios.jpg">
       

      </div>
     

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}

var myIndex1 = 0;
carousel1();

function carousel1() {
  var o;
  var y = document.getElementsByClassName("slide1");
  for (o = 0; o < y.length; o++) {
    y[o].style.display = "none";  
  }
  myIndex1++;
  if (myIndex1 > y.length) {myIndex1 = 1}    
  y[myIndex1-1].style.display = "block";  
  setTimeout(carousel1, 4000); // Change image every 2 seconds
}
</script>






















      <!--div class="slider-controls">
        <div class="button-left">
            <button class="w3-button w3-display-left left" onclick="plusDivs(-1)">&#10094;</button>
          </div>
        <div class="button-right">
          <button class="w3-button w3-display-right right" onclick="plusDivs(+1)">&#10095;</button>
        </div>
      </div-->
 





      <!--script type="text/javascript">
      var slideIndex=1;
      function plusDivs(s)
      {
        showDivs(slideIndex+=s)
      }
      function showDivs(s)
      {
        var e,d=document.getElementsByClassName("slide");
      for
        (s>d.length&&(slideIndex=1),s<1&&(slideIndex=d.length),e=0;e<d.length;e++)
      d[e].classList.remove("show");
      d[slideIndex-1].classList.add("show")
    }
    showDivs(slideIndex);
</script-->
      
      <div class="title">
        <h1>
          LA MEJOR TECNOLOGÍA<br>
          E INNOVACIÓN
        </h1>
        <h2>
          CALIDAD Y <br>
          VANGUARDIA
        </h2>
      </div>
    </div>
  </section>

  <section id="home_sub">
    <div class="container">
      <div class="row">
        <div class="col-md-6 orange wow fadeInLeftBig" data-wow-duration="1s"  data-wow-delay="0.6s">
          <div class="dumb-dumb"></div>
          <div class="element col-md-4 col-xs-4">
            <p>
              +20 AÑOS<br>
             DE <br>EXPERIENCIA
            </p>
          </div>

          <div class="element col-md-4 col-xs-4">
            <p >
              +100 <br>
              PROYECTOS<br>
              FINALIZADOS
            </p>
          </div>

          <div class="element col-md-4 col-xs-4">
            <p>
              +36000<br> VIVIENDAS<br>
              ELECTRIFICADAS
            </p>
          </div>
        </div>

        <div class="col-md-6 text wow fadeIn" data-wow-duration="2.5s"  data-wow-delay="0.6s">
          <p>
            Somos una empresa conformada por grupos de expertos dedicados a brindar soluciones a tus requerimientos en proyectos de construcción, mantenimiento, sistemas eléctricos, obra civil y  edificios inteligentes.
            Desarrollamos proyectos teniendo un alcance a ciudades como: Cancún, Playa del Carmen, Tulum, Cozumel y Mérida, Yucatán.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="home_services">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wow fadeIn"  data-wow-duration="2.5s"  data-wow-delay="0.6s" data-wow-offset="300">
          <h2>
            NUESTROS <br>
            SERVICIOS
          </h2>
          <p>En CCI Tecnologia proveemos diversos servicios gracias a nuestro equipo multidisciplinario y a nuestros profesionales altamente capacitado con amplia experiencia en el campo.<br>
          Nuestros servicios fueron creados y diseñados con base en las necesidades que nuestros clientes tuvieron y logramos satisfacer a lo largo de sus proyectos.</p>
          <a href="/servicios.php" title="Servicios">¡Conoce más acerca de nuestros servicios!</a>
        </div>

        <div class="col-md-6 wow fadeIn"  data-wow-duration="2.5s"  data-wow-delay="0.6s" data-wow-offset="300">
          <p>Áreas de experiencia:</p>
          <div class="services">
            <!-- Change to 3 cols? -->
            <div class="col">
              <div>
                <a href="/servicios.php#Electrificacion" title="Servicios: Electrificacion">
                  <img class="lazy wow rotateIn" data-src="img/01.gif" alt="logo" data-wow-duration="1s"  data-wow-delay="1.5s" data-wow-offset="230">
                  <p class="wow fadeIn" data-wow-duration="1s"  data-wow-delay="1.5s" data-wow-offset="230"><br>Electrificacion</p>
                </a>
              </div>
            </div>

            <div class="col">
              <div>
                <a href="/servicios.php#Hidrosanitario" title="Servicios: Hidrosanitario">
                  <img class="lazy wow rotateIn" data-src="img/02.gif" alt="logo" data-wow-duration="1s"  data-wow-delay="2.0s" data-wow-offset="230">
                  <p class="wow fadeIn" data-wow-duration="1s"  data-wow-delay="2.0s" data-wow-offset="230"><br>Hidrosanitario</p>
                </a>
              </div>
            </div>

            <div class="col">
              <div>
                <a href="/servicios.php#Obra-Civil" title="Servicios: Obra Civil">
                  <img class="lazy wow rotateIn" data-src="img/03.gif" alt="logo" data-wow-duration="1s"  data-wow-delay="2.5s" data-wow-offset="230">
                  <p class="wow fadeIn" data-wow-duration="1s"  data-wow-delay="2.5s" data-wow-offset="230"><br>Obra Civil</p>
                </a>
              </div>
            </div>

            <div class="col">
              <div>
                <a href="/servicios.php#Edificios-Inteligentes" title="Servicios: Edificios Inteligentes">
                  <img class="lazy wow rotateIn" data-src="img/04.gif" alt="logo" data-wow-duration="1s"  data-wow-delay="3.0s" data-wow-offset="111">
                  <p class="wow fadeIn" data-wow-duration="1s"  data-wow-delay="3.0s" data-wow-offset="111">Edificios<br> Inteligentes</p>
                </a>
              </div>
            </div>

            <div class="col">
              <div>
                <a href="/servicios.php#Diseño-de-Proyectos" title="Servicios: Diseño de Proyectos">
                  <img class="lazy wow rotateIn" data-src="img/05.gif" alt="logo" data-wow-duration="1s"  data-wow-delay="3.5s" data-wow-offset="111">
                  <p class="wow fadeIn" data-wow-duration="1s"  data-wow-delay="3.5s" data-wow-offset="111">Diseño de<br> Proyectos</p>
                </a>
              </div>
            </div>

            <div class="col">
              <div >
                <a href="/servicios.php#Telematica" title="Servicios: Telematica">
                  <img class="lazy wow rotateIn" data-src="img/06.gif" alt="logo" data-wow-duration="1s"  data-wow-delay="4.0s" data-wow-offset="111">
                  <p class="wow fadeIn" data-wow-duration="1s"  data-wow-delay="4.0s" data-wow-offset="111"><br>Telematica</p>
                </a>
              </div>
            </div>
			
			
			
			
			
			
			
			
			
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home_history" class="wow fadeInDown" data-wow-duration="2s"  data-wow-delay="0.5s" data-wow-offset="100">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3 left">
          <h2>
            SOBRE <br>
            NOSOTROS
          </h2>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6 center" >
          <p>
            Tenemos el objetivo primordial de atender y dar un excelente servicio a
            las desarrolladoras enfocandonos a electrificaciones en media y baja 
            tensión para obras nuevas; así como la realización de trámites ante
            Comisión Federal de Electricidad.<br>Debido al crecimiento del sector
            de vivienda popular y diferentes desarrollos turísticos habitacionales, 
            extendimos nuestra presencia a las ciudades de Chetumal, Playa del Carmen, Villahermosa, Mérida y Monterrey.
            <br>
            <br>
            <br>
            <br>
            <br>
          </p>
        </div>
        
        <div class="col-md-3 col-sm-3 col-xs-3 right ">
          <ul>
            <li><b>Valores:</b></li>
            <li>Respeto</li>
            <li>Union</li>
            <li>Constancia</li>
            <li>Responsabilidad Social</li>
            <li>Integridad</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section id="home_projects">
    <div class="container">
      <div class="row wow fadeInUp" data-wow-duration="2s"  data-wow-delay="0.5s" data-wow-offset="100">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            PROYECTOS DESARROLLADOS
          </h2>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <span class="experience">
            20 años de experiencia nos respaldan
          </span>
        </div>
      </div>
      
      <div class="row wow fadeInUp" data-wow-duration="2s"  data-wow-delay="0.5s" data-wow-offset="200">
        <div class="col-md-3 col-sm-3 col-xs-6 left">
          <figure>
            <!--a href="https://soyhorizonte.com" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text" data-gallery="example-gallery" data-type="url"-->
            
              <img class="lazy" data-src="img/casas_javer_alt.jpg" alt="proyecto">
        
          </figure>
          <span>Fraccionamiento Kuzamil, electrificación de 800 casas, Cancun Quintana Roo.</span>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 middle">
          <figure>
            
              <img class="lazy" data-src="img/allure_ocean_front_luxury_condos_alt.jpeg" alt="proyecto">
           
          </figure>
          <span>Instalación eléctrica e hidrosanitaria de 52 deptos ubicada en Puerto Cancún Quintana Roo.</span>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 middle">
          <figure>
           
              <img class="lazy" data-src="img/alumbrado_benito_juarez_alt.jpg" alt="proyecto">
            
          </figure>
          <span>3Km de Alumbrado público en la avenida López Portillo.</span>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6 right">
          <figure>
        
              <img class="lazy" data-src="img/consorcio_ara_alt.jpg" alt="proyecto">
           
          </figure>
          <span>Misión de las flores, electrificación y alumbrado público de 1000 casas en Playa del Carmen Quintana Roo.</span>
        </div>
      </div>
    </div>
  </section>
    
  <section id="home_experience">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-5 wow fadeIn animated" data-wow-duration="1s"  data-wow-delay="0.5s" data-wow-offset="100">
          <p class="wow zoomIn animated" data-wow-duration="1s"  data-wow-delay="0.5s" data-wow-offset="100">
            CCI cuenta con las mejores opciones en innovación, sustentabilidad  y tecnología para tus proyectos, contando con los mejores equipos y personal  para otorgar un servicio de vanguardia y calidad.
          </p>
        </div>

        <div class="col-md-7 col-sm-7 col-xs-7 wow zoomIn animated" data-wow-duration="1s"  data-wow-delay="0.5s" data-wow-offset="100">
          <div class="row">
            <div class="col-md-6 col-sm-6  col-xs-6">
              <h2>
                LA EXPERIENCIA<br>
                NOS RESPALDA
              </h2>
              <p>
                Más de 20 años de experiencia cubriendo y logrando satisfacer por completo las necesidades de nuestros clientes, es lo que ha logrado que continuemos en pie, nuestra buena disposición y servicios de calidad nos hacen destacar y posicionarnos en el mercado.
              </p>
            </div>

            <a href="/about_us.php#team">
              <div class="col-md-6 col-sm-6 col-xs-6 img">   
                <div></div>           
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php';?>



