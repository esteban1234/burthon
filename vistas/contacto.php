<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
    <nav>
        <ul>
            <a class="selector" href="../index.php">INICIO</a>
            <a class="selector" href="nosotros.php">NOSOTROS</a>
            <a class="selector" href="servicios.php">SERVICIOS</a>
            <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
    </nav>
</header>

<div class="op-menu">
  <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
  <span class="cerrar">X</span>
</div>

<div class="bannerc">
    <figure class="logo4 pull-left text-center">
    <br>
    <h1>COMERCIALIZADORA</h1>
    <img src="../img/burthon.png" class="img-responsive" alt="">
    <h1>CONTACTO</h1>
</figure>
</div>

<div class="container" style="overflow: hidden;">
	<div class="row fila">
	<h1 class="text-info text-center">Escríbenos</h1>
	<p>Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
		<form role="form" id="contact-form" class="contact-form" onSubmit="return false">
                    <div class="row">
                		<div class="col-md-4">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="txtNOMBRE" placeholder="Nombre Completo">
                  		</div>
                  	</div>

                  	<div class="col-md-4">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="txtTELEFONO" placeholder="Teléfono">
                  		</div>
                  	</div>

                    	<div class="col-md-4">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="txtCORREO" placeholder="E-mail">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="txtCOMENTARIO" placeholder="Escribe tu comentario"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                      <div id="_AJAX_PRE_"></div>
                  <button type="submit" class="btn main-btn pull-right" onclick="sendCORREO()">ENVIAR MENSAJE</button>
                  </div>
                  </div>
                </form>
	</div>
</div>

<div class="contenmapa">
	<div class="container">
		<div class="row-fluid">
	        <div class="col-md-9">

	        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3611633392707!2d-89.63279248561429!3d20.97815498602578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5673e6c5cd3f85%3A0x8a6903fa8c8e12f2!2sCalle+45+556B%2C+Centro%2C+97000+Centro%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1502207590561" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	        	<!-- <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=10+Rue+de+Rome&sll=48.874650,2.325336&ie=UTF8&hq=&hnear=10+RUE+DE+ROME,+75008,+FRANCE&t=m&z=17&ll=48.875350,2.325336&output=embed"></iframe> -->
	    	</div>

	      	<div class="col-md-3">
	    		<h3 class="subtit-pie">COMERCIALIZADORA BURTHON S.A de C.V.</h3>
	    		<address>
	    			<!-- <strong>Hythe Window Cleaning</strong><br> -->
	    			<i class="fa fa-map-marker" aria-hidden="true"></i> C. 45 #556-B entre 74-A y 76  <br>
	    			<!-- Hythe<br>
	    			Kent<br> -->
	    			Col. Centro. Mérida, Yucatán.<br>
	    			C.P. 97000<br><br>
	    			<abbr ><i class="fa fa-phone" aria-hidden="true"></i></abbr> PENDIENTE <br>
	    			<abbr ><i class="fa fa-clock-o" aria-hidden="true"></i></abbr> Lunes a Viernes de 9 am a 6 pm <br>
	    			<abbr ><i class="fa fa-envelope-o" aria-hidden="true"></i></abbr> info@burthon.com
	    		</address>
	    	</div>
	    </div>
	</div>
</div>


<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
