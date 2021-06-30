<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
<meta name="description" content="Bootstrap navbar hover examples for any type of project, Bootstrap 4" />  

<title>PRUEBA OPA</title>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>


<style type="text/css">
/* ============ desktop view ============ */
@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
/* ============ desktop view .end// ============ */


</style>
</head>
<body class="bg-light">

<header class="section-header py-4">
<div class="container">	
	
</div>
</hea|
-der> <!-- section-header.// -->

<!-- ========================= SECTION CONTENT ========================= -->

<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  OPCIONES  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="views/frmRegistroElementos.php">Registrar Elementos</a></li>
			  <li><a class="dropdown-item" href="#"> Opción2 </a></li>
			  <li><a class="dropdown-item" href="#"> Opción3 </a></li>
		    </ul>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  CONSULTAS  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="controller/ctrConsultasProveedor.php?consulta1=listado1">Listado de Elementos</a></li>
			  <li><a class="dropdown-item" href="#"> Opción2 </a></li>
			  <li><a class="dropdown-item" href="#"> Opción3 </a></li>
		    </ul>
		</li>
				
		
		
		
	</ul>
	
  </div> <!-- navbar-collapse.// -->
</nav>

<section class="section-content py-5">

		
        

</section>

</div><!-- container //  -->

</body>
</html>