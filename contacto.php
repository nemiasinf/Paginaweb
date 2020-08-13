<?php
  //Variables del Header
  $title = 'Contáctanos - CCI';
  $description =  'Queremos conocerte, si tienes un proyecto en puerta contáctanos para recibir información de todos nuestros servicios sin compromiso.
    Encuentranos en: región 93, Manzana 52, Lote 17 Av. 97 esq. Calle 32 San Antonio II Benito Juárez Cancún, Q. Roo, México CP 77517.';
  $current_page = 'contactanos';
?>

<?php include 'header.php';?>

<main>
  <section id="title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">QUEREMOS<br>CONOCERTE</h1>
        </div>
      </div>
      <div class="orange-separator"></div>
    </div>
  </section>

  <section id="contact-us_img" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
    <div class="container">
      <div class="img">
      </div>
    </div>
  </section>

  <section id="contact-us_form">
    <div class="container">
      <div class="gray">
        <div class="col-md-6 col-sm-6 col-xs-6 left wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <h2>CONTÁCTANOS</h2>
          <p>
            Si tienes un proyecto en puerta contáctanos para recibir información de todos nuestros servicios sin compromiso.<br><br>
            <b>Encuentranos en:</b> Calle 57C Número 648 Fracc. Las Américas, Mérida, Yucatán, México CP 97302
          </p>
          <br>
          <p><a href="tel:9984988094" title="contactanos" class="orange">998 498 8094</a></p>
          <br>
			<div><h2><br><br>
				  Horarios de atención:<br><br>
				  Lunes a Viernes 9:00 am - 5:00 pm<br>
				  Sábado 9:00 am - 1:00 pm<br><br><br>
				</h2></div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 right  wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="200">
          <form id="form_id" action="send_email.php" title="contact" method="post">
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-6 left">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nombre" required>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 right">
                <input class="form-control" type="text" name="surname" id="surname" placeholder="Apellidos" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-6 left">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 right">
                <input class="form-control" type="phone" name="phone" id="phone" placeholder="Telefono" required>
              </div>
            </div>
            <div class="form-group select">
              <select class="form-control" name="question" id="question" required>
                <option value="" selected>¿Como nos encontraste?</option>
                <option value="amigo_referrido">Amigo/Referrido</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="google">Google</option>
                <option value="publicidad_impresa">Publicidad impresa</option>
                <option value="otro">Otro(Especifique en el mensaje)</option>
              </select>
            </div>
            <div class="form-group select">
              <select class="form-control" name="subject" id="subject" required>
                <option value="" selected>Asunto:</option>
                <option value="ventas">Ventas</option>
                <option value="atencion_clientes">Atencion a clientes</option>
                <option value="recursos_humanos">Recursos humanos</option>
                <option value="proveedor">Proveedor</option>
                <option value="otro">Otro(Especifique en el mensaje)</option>
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="about" id="about" rows="5" placeholder="Cuentanos sobre ti."></textarea>
            </div>
            <div class="form-group">
              <input class="form-control submit" type="submit" name="submit" value="Enviar">
            </div>
          </form>

        <script type='text/javascript'>
          /* attach a submit handler to the form */
          window.onload = function(){
            $("#form_id").submit(function(event)
            {
              /* stop form from submitting normally */
              event.preventDefault();

              /* get the action attribute from the <form action=""> element */
              var $form = $( this );
              var url = $form.attr( 'action' );

              /* Send the data using post with element id name and name2*/
              var posting = $.post( url, { 
                name: $('#name').val(), surname: $('#surname').val(),
                email: $('#email').val(), phone: $('#phone').val(),
                question: $('#question').val(), subject: $('#subject').val(),
                about: $('#about').val(),
              });

              /* Alerts the results */
              posting.done(function(data) {
                //alert('success');
                data = JSON.parse(data);
                
                if(data.error_message)
                {
                  alert(data.error_message + data.result);
                }
                else
                {
                  alert(data.result);
                }
                $("#form_id").reset();
              });

              posting = $.post( "https://api.siroc.info/email_campaign", 
              { 
                name: $('#name').val() + " " + $('#surname').val(), 
                email: $('#email').val(), 
                phone: $('#phone').val(),
              });


              // Alerts the results //
              posting.done(function(data) 
              {
                data = JSON.parse(data);
                //alert('success');
                if(!data.email_campaign)
                {
                  //alert(data.message);
                }
                else
                {
                  //alert("ERROR");
                }
              });
            });
          }
        </script>
        <!--script type="text/javascript">window.onload=function(){$("#form_id").submit(function(a){a.preventDefault();var n=$(this).attr("action");$.post(n,{name:$("#name").val(),surname:$("#surname").val(),email:$("#email").val(),phone:$("#phone").val(),question:$("#question").val(),subject:$("#subject").val(),about:$("#about").val()}).done(function(a){alert(a)})})};</script-->


        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'footer.php';?>



