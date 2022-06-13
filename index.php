<!DOCTYPE html>
<html lang="en">
<head>
<title>.:: Sistema SIRGB ::.</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- animation css files -->
	<link rel="stylesheet" href="vista/style_index/css/animation-aos.css">
	<link href='vista/style_index/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<!-- //animation css files -->

	<!-- css files -->
    <link href="vista/style_index/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="vista/style_index/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="vista/style_index/css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
    <link href="vista/css/sweet-alert.css" rel="stylesheet"><!-- alert css -->
    <link rel="stylesheet" type="text/css" href="vista/css/main.css">
	<!-- //css files -->
	
</head>
<body style="width: 100%" onload="sinVueltaAtras();" onpageshow="if (event.persisted) sinVueltaAtras();" onunload="">

<!-- header -->
<header class="index-banner">
    <!-- nav -->
    <nav class="main-header">

      <div id="menu">
        <div id="menu-toggle">
          <div id="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
      </div>
    </nav>
    <!-- //nav -->
	<!-- banner -->
	<div class="banner layer" id="home">
		<div class="container-fluid" style="height: 47.5em">
			<div class="row">
				<div class="slider-info col-lg-1"></div>
				<div class="slider-info col-lg-10">
					<h3 class="txt-w3_agile" data-aos="fade-down" style="text-transform: inherit;font-size: 30px;text-align: center;margin-top: 3%;font-family: initial;">Sistema Web de Reingeniería para la Gestión Bibliotecaria <br> (SIRGB)</h3>
					<!--<a class="btn mt-4 mr-2 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">read more</a>
					<a class="btn mt-4 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModal" role="button">watch video <i class="fas fa-play-circle"></i></a> -->
				</div>
				<div class="slider-info col-lg-1"></div>				
			</div>

			<div class="row" style="margin-top: 1%;font-family: initial;">
				<div class="slider-info col-md-4"></div>
				<div class="col-md-4 banner-form" style="background: #ffffff38;padding: 65px">
					<h5><i class="fas mr-2 fa-user"></i> Ingresar al Sistema</h5>
					<form action="controlador/validar_logueo.php" class="mt-4" method="post">
						<input class="form-control" type="text" name="usuario" placeholder="Nombre de usuario..." required="" autocomplete="off" style="background: white;color: #000;" />
						<input class="form-control" type="password" name="pass" placeholder="Clave de acceso..." required="" autocomplete="off" style="background: white;color: #000;" />	

						<!--<div class="links" style="text-align: right;">
							<p><a href="vista/usuarios/recuperar_acceso.php" style="color: white;font-family: initial;"><i class="fas mr-2 fa-lock-open"></i> Recuperar acceso.</a></p>
						</div><br>
--> <br><br>
            <button class="form-control text-capitalize" type="submit" style="background: #19a6bd;border: 1px solid #19a6bd;color: white;font-size: 17px"><b>Entrar</b> <i class="fas mr-2 fa-sign-in-alt"></i></button>

					</form>
				</div>
				<div class="slider-info col-md-4"></div>
			</div>
		</div>
	</div>
	<!-- //banner -->
</header>
<!-- //header -->

    <!-- js -->
    <script src="vista/style_index/js/jquery-2.2.3.min.js"></script>
    <script src="vista/style_index/js/bootstrap.js"></script>
    <!-- Essential javascripts for application to work-->
    <!-- //js -->
    <!-- Page specific javascripts-->

    <script type="text/javascript">
        window.history.forward();
        function sinVueltaAtras(){ window.history.forward(); }
    </script>


    <script type="text/javascript" src="vista/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          //Disable cut copy paste
          $('body').bind('cut copy paste', function (e) {
            swal("Acceso Denegado", "Esta función no es permitida", "error");
            e.preventDefault();
          });
         
          //Disable mouse right click
          $("body").on("contextmenu",function(e){
            swal("Acceso Denegado", "Esta función no es permitida", "error");
            return false;
          });
      });
    </script>
	
	<!-- animation js -->
	<script src='vista/style_index/js/aos.js'></script>
	<script>
		AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script>
	<!-- //animation js -->
  
	<script src="vista/style_index/js/smoothscroll.js"></script><!-- Smooth scrolling -->

    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->

    <script>
    function showExam(str) {
      if (str == "") {
          document.getElementById("chekexa").innerHTML = "";
          return;
      } else { 
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  document.getElementById("chekexa").innerHTML = xmlhttp.responseText;
              }
          }
          xmlhttp.open("GET","controlador/recuperar_acceso.php?q="+str,true);        
          //redirect(URL("GET","getinsu.php?q="+str),client_side=true)
          xmlhttp.send();
      }
    }
    </script>
    
    <!-- SCRIPT PARA BLOQUEAR CLICK DERECHO DEL MOUSE -->
    <script>
      $(document).ready(function(){
         $(document).bind("contextmenu",function(e){
            alert('Este tipo de evento no está permitido');
            return false;
         });
      });
    </script>

    <script type="text/javascript">    
        var path = 'http://localhost:8080/SGEE/index.php';
        history.pushState(null, null, path + window.location.search);
        window.addEventListener('popstate', function (event) {
            history.pushState(null, null, path + window.location.search);
        });

    </script>
</body>
</html>