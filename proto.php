<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>PROTO NAV BARS</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">

	body{	
	background-color: black;
	width:100%;
	}
	
	.nav-cent{
		text-align: center;
		width:100%;
	}
	.nav-cent span{
		font-size: 18px;	
	}

	.nav-cent tp{
		font-size: 13px;
		
	}
	.nav-li{
	display:table-cell;
	width: 16%;
	}
	
	
	.nav-cent cx{
		width:10%;
		padding: 10px 10px;
		-webkit-border-radius: 0px;		
		background-color: #f7f7f7;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);		
	}
	
	.nav-cent ul{
		color: white;
		margin-left:-2%;		
	}
	
	.nav-cent li{
		font-size: 10px;
		display: inline-block;
		
	}
	
	.titulo_cent{
		
		font-size: 4.35em;
		font-weight: 900;
		letter-spacing: -0.001em;
		line-height: 1em;
		color:white;
				
	}
	.titulo_cent p{
		
	    font-family: Lucida Console;
	    font-size: 0.5em;
	    font-weight: initial;
	    margin: 0.35em 0 0.25em;
	    opacity: 0.48;
	
		
	}
	.input-group{
		width: 50%;
		margin-left:25%;
		padding: 3%;			
	}			
	
	.cont-group{}
	
	.cont-group li{
		height:2.5em;
		padding: 3px;			
	}
	
	.cont-group a:hover {
		text-decoration: none;
		padding 10px;
		color:#337ab7;
		
	}
	
	
	.cont-group a {
		font-size: 30px;
		color: white;
		
	}
	
	.well-painel {
		background-color: black;
		border: 1px solid #7b7b7b;
		border-radius: 20%;
		color: black;
		margin-bottom: 20px;
		min-height: 25px;
		padding: 21px 16px 18px;
		
	}
	
	div.scroll {
		height: 13em;
		width: 18em;
		overflow: auto;
		padding: 8px;
		
	}
		div.scroll a {
		color:black;
		
	}
	
	

	div.scroll li.separador{
    width: 100%; /* coloque aqui a largura da linha */
    border-bottom: 1px solid rgba(154, 152, 152, 0.15);
    list-style-type: none;
	font-size:0.9em;
	
	
	
}

div.scroll a{
	border-radius: 4px;
    color: #222222;
    display: block;
    height: auto;
    line-height: auto;
    overflow: hidden;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 0.25em 0 rgba(0, 0, 0, 0.25) inset;
    text-overflow: ellipsis;
    white-space: nowrap;
}
div.scroll a:hover{
	 background-color: #275E8D;
    color: #ffffff;
    text-decoration: none;
	
    
}




	.out-put-comands{
		
		color:white;
		margin-top:3em;
		margin-bottom:2.5em;
		background:#242424;
		
		
		
	}
	
	.footer-cent{
		color:white;
		bottom:0;
		width:100%;
		 position: fixed;
	
	}
	
</style>
</head>
<body>
<div class="nav-cent">

    <ul class="nav nav-pills">
       
        <li class="dropdown pull-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
           
            <ul class="dropdown-menu">
			<div class="scroll">
                <li class="separador"><a href="#"><img src="img.png">Teste de Escrita - Action Action</a></li>				
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
		}
		?>
	</div>
	

	
	
	
</body>
</html>      



