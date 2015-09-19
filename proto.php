<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>PROTO NAV BARS</title>
<!-- Latest compiled and minified CSS -->
<link rel="icon" href="favicon.png" /><!-- Favicon -->
<link rel="stylesheet" href="css/principal.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	
</head>
<body class="body">
<div class="nav-cent">

    <ul class="nav nav-pills">
       
        <li class="dropdown pull-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
           
            <ul class="dropdown-menu">
			<div class="scroll">

                <li class="separador"><a href="#"><img src="img.png">Teste de Escrita - Action Action</a></li>				

                <li class="separador"><a href="#"><img src="img.png">Teste de Escrita - Action</a></li>				

                <li class="separador"><a href="#"><img src="img.png">Another actionacti</a></li>				
                <li class="separador"><a href="#"><img src="img.png">Settings</a></li>
				</div>
            </ul>
        </li>
    </ul>
	<div class="titulo_cent">

	Marcos Junior
	<p>Systems Analyst</p>
	</div>
	<form method="post">
	<div class="input-group">
		<input type="text" name="comm" class="form-control" placeholder="Ask me...">

			<span class="input-group-btn">
			<button class="btn btn-primary" type="submit"><i class="fa fa-play"></i></button>
		</span>
	</div>
	</form>
	<div class="cont-group">
		<ul>
			
			<li><div class="well-painel"><span class="label"><a class="fa fa-skype" href="#"></a></span></div></li>
			<li><div class="well-painel"><span class="label"><a class="fa fa-linkedin-square" href="#"></a></span></div></li>
			<li><div class="well-painel"><span class="label"><a class="fa fa-pencil-square-o" href="#"></a></span></div></li>
			<li><div class="well-painel"><span class="label"><a class="fa fa-github" href="#"></a></span></div></li>
			<li><div class="well-painel"><span class="label"><a class="fa fa-google-plus" href="#"></a></span></div></li>
			
		</ul>
	</div>
	
	
	<div class="footer-cent"><p>CopyRight2015</p></div>
	<div class='out-put-comands'>
			
		<?php
		if (!empty($_POST)){
			$comm = $_POST['comm'];
			echo "";		
			echo "$comm";

		
			if ($comm == ""){
							
			echo"<div class='alert alert-info'>";
			
    echo"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
			
			
			echo"<strong>Info!</strong> Indicates a neutral informative change or action.";
			echo"</div>";
						
			}

			echo "";

		}
		?>
	</div>
	

	
	
	
</body>
</html>      



