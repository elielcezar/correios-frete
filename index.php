<!DOCTYPE html>
<!-- saved from url http://www.bootstraptor.com ##########################################################################
Don't remove this attribution!
This template build on DevKit http://www.bootstraptor.com 
under GPL v.2 license 
##########################################################################
-->
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Base Bootstrap features page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<!-- style.css under BS styles !important-->
<style type="text/css">
      body {
        padding-top: 0px;
		padding-bottom: 0px;
      }
	  
	  @media (max-width: 979px){
		.navbar .container {
			width: auto;
			padding: 0px 20px;
		}
		.navbar-fixed-top, .navbar-fixed-bottom {
				position: fixed;
			}
	}
	  @media (max-width: 767px){
		
		body{
			 padding-right: 0px;
			padding-left: 0px;
		}
		.container {
			width: auto;
			padding-right:20px;
			padding-left:20px;
			overflow:hidden;
			}
	 }
	 
	  header{
		padding-top:50px;
	  }
	  section {
		padding-top:50px;
		padding-bottom:100px;
		min-height:600px;
		width:100%;
		min-width:100%;
		-webkit-box-shadow: 0 3px 0px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 3px 0px rgba(0, 0, 0, 0.1);
				box-shadow: 0 3px 0px rgba(0, 0, 0, 0.1);
	  }
	  

	  footer{
		display:inline-block;
		width:100%;
		min-width:100%;
		padding-top:50px;
		padding-bottom:50px;
		min-height:300px;
		background:#e0e0e0;
	  }
	  
	  #Section-1{
		
	  }
	  /****************** NAVIGATION STYLES *************************/
	.navbar .nav > li > a {
		float: none;
		padding: 15px 20px 15px;
		color: #777777;
		text-decoration: none;
		text-shadow: none;
		font-size:14px;
		font-wight:bold;
		text-transform:uppercase;
	}
	.navbar .nav > .active > a, 
	.navbar .nav > .active > a:hover, 
	.navbar .nav > .active > a:focus {
		color: #333;
		text-decoration: none;
		background-color: #fff;
		-webkit-box-shadow:  none;
			-moz-box-shadow:   none;
				box-shadow:  none;
	}
	.navbar .brand {
		padding: 15px 0px 15px;
		margin-left:0px;
	}

	.navbar-fixed-top .navbar-inner, 
	.navbar-static-top .navbar-inner {
		-webkit-box-shadow: 0 3px 0px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0 3px 0px rgba(0, 0, 0, 0.1);
					box-shadow:0 3px 0px rgba(0, 0, 0, 0.1);
	}

	.navbar-inner {
		min-height: 30px;
		padding-right: 20px;
		padding-left: 20px;
		background-color: #fafafa;
		background-image: -moz-linear-gradient(top, #ffffff, #ffffff);
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#ffffff));
		background-image: -webkit-linear-gradient(top, #ffffff, #ffffff);
		background-image: -o-linear-gradient(top, #ffffff, #ffffff);
		background-image: linear-gradient(to bottom, #ffffff, #ffffff);
		background-repeat: repeat-x;
		border: none;
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffffffff', GradientType=0);
		-webkit-box-shadow: none;
			-moz-box-shadow: none;
				box-shadow: none;
	}
	
	.hero-unit{
		background:#fff;
		border:none;
		margin-bottom:10px;
	}
	
	.label.label-new{
		background:none;
		border: 1px solid #2b2b2b;
		color:#2b2b2b;
		margin:5px 10px 5px 0px;
		padding:10px 10px 7px;
		overflow:hidden;
		
	}
	.label.label-new-big{
	
		padding:20px;
		box-sizing:border-box;
		-moz-box-sizing:border-box;
	}
	.fa-icon-medium{
		font-size:200%;
	}
	
	.fa-icon-large{
		font-size:1200%;
	}
	.btn{
		margin-bottom:30px;
	}
	.thumbnail img{
		min-width:100%;
		margin-bottom:30px;
	}
	/************* VIDEO *******************************/

		.fluid-width-video-wrapper {
			width: 100%;
			position: relative;
			padding: 0;
			padding-top: 50%;
		}
		.vendor {
			margin-bottom: 0px;
		}

		.container-video {
			width: 100%;
			min-width: 100%;
			position: relative;
			padding: 0;
			height: 100%;
		}

		.fluid-width-video-wrapper iframe, 
		.fluid-width-video-wrapper object, 
		.fluid-width-video-wrapper embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border:0px;
		}

		.video-well.well{
			-webkit-border-radius:0px;
				-moz-border-radius:0px;
					border-radius:0px;
		}

    </style>

<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<!--[if lt IE 7]>
	<link href="assets/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
    <!-- Fav and touch icons -->


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">




 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
  
</head>


  <body>
 
<!-- HEADER --> 
  <header id="top-section">
  
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">PREZENTER free v. 1.0.0 <small class="hidden-phone">BOOTSTRAPTOR!COM</small></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right" id="topnav">
              <li class="active"><a href="#top-section">Home</a></li>
              <li><a href="#Section-1">Section-1</a></li>
              <li><a href="#Section-2">Section-2</a></li>
			  <li><a href="#Section-3">Section-3</a></li>
			  <li><a href="#foot-sec">Footer</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
		<div class="container">
			<div class="row-fluid">
			
			<!-- here some FEATURE for mobile - first span6 have class="pull-right"   when it on mobile, than it shows on top -->	
			<!--  video-->
				<div class="span6 pull-right">
					<div class="vendor" style="margin-bottom:30px;">
						<div class="container-video ">
							<div class="fluid-width-video-wrapper" style="">
								<iframe  src="http://www.youtube.com/embed/HPLjK1ynEds"></iframe>
							</div>
						</div>
					</div>
				</div>
				<!-- / video-->
				
				<!--  description-->
				<div class="span6 text-left" style="padding-right:30px;">
					<h1 class="">Presentation title</h1>
					<h2 class="">Present your apps or Boots or straps sub-title</h2>
					
					<p class="">
						Show responsive video on all devices.
					</p>
					<hr>
						<!-- buttons-->
						<div class="row-fluid">
							<div class="span6">
								<a class="btn  btn-info btn-block btn-large" href="#" title="">Buy now!</a>
							</div>
							<div class="span6">
								<a class="btn  btn-success btn-block btn-large" href="#" title="">Learn more!</a>
							</div>
						</div>
						<!-- /buttons-->
				
				</div>
				<!-- / description-->
				
			</div>
		</div><!-- /ROW-FLUID-->
		 
      </div>
	  
	</header>
<!-- / HEADER -->



 <!-- / SECTION-2 -->
 
 <!-- SECTION-3 -->
<section id="Section-3">
<div class="container">	
	
		<!-- Example row of columns -->
		<div class="row">

			<div class="span6">


			<form method="post" action="script.php">
				<fieldset>
				    <legend>Digite os dados da encomenda:</legend>
				    <p>
				        <label for="sCepOrigem">Cep de Origem (somente números): </label>
				        <input type="text" name="sCepOrigem" id="sCepOrigem" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" />
				    </p>
				    <p>
				        <label for="sCepDestino">Cep de Destino (somente números): </label>
				        <input type="text" name="sCepDestino" id="sCepDestino" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" />
				    </p>
				    <!--p>
				        <label for="nVlPeso">Peso Total (Kg): </label>
				        <input type="text" name="nVlPeso" id="nVlPeso" onkeydown="javascript: return mascaraValor(this,event,5,3);" maxlength="5" />
				    </p>
				    <p>
				        <label for="nVlComprimento">Comprimento da Embalagem (Cm): </label>
				        <input type="text" name="nVlComprimento" id="nVlComprimento" onkeypress="return txtBoxFormat(this, '999', event);" maxlength="3" />
				    </p>
				    <p>
				        <label for="nVlAltura">Altura da Embalagem (Cm): </label>
				        <input type="text" name="nVlAltura" id="nVlAltura" onkeypress="return txtBoxFormat(this, '999', event);" maxlength="3" />
				    </p>
				    <p>
				        <label for="nVlLargura">Largura da Embalagem (Cm): </label>
				        <input type="text" name="nVlLargura" id="nVlLargura" onkeypress="return txtBoxFormat(this, '999', event);" maxlength="3" />
				    </p>
				    <p-->
				        <!--label for="nCdServico">Serviço: </label>
				        <select name="nCdServico" id="nCdServico">
				            <option value="41106">PAC </option>
				            <option value="40010">SEDEX </option>
				            <option value="40215">SEDEX 10 </option>
				            <option value="40290">SEDEX HOJE </option>
				        </select-->

				        <!--input type="text" name="nCdServico" id="nCdServico" /-->

				    </p>
				    <p>
				        <input type="submit" value="Calcular Frete" onclick="loadXMLDoc()"/>
				    </p>
				</fieldset>
				</form>


			</div>

			<div class="span6">

					<form name="ajaxform" id="ajaxform" action="script.php" method="POST">
						 <p>
				        <label for="sCepOrigem">Cep de Origem (somente números): </label>
				        <input type="text" name="sCepOrigem" id="sCepOrigem" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" />
				    </p>
				    <p>
				        <label for="sCepDestino">Cep de Destino (somente números): </label>
				        <input type="text" name="sCepDestino" id="sCepDestino" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" />
				    </p>
					</form>
					<input type="button"  id="simple-post" value="Run Code" />
					<div id="simple-msg"></div>


			</div>

		</div>		
	
</div>

</section> 
 <!-- / SECTION-2 -->
      
<!-- FOOTER -->
    <footer id="foot-sec">
		<div class="container">
			<div class="row">
				<div class="span12">
					<p class="lead text-center">Footer section</p>
					<p>© 2013 Build with <a class="" href="http://www.bootstraptor.com">www.bootstraptor.com</a></p> Video in header: Twitter Bootstrap WordPress Theme - StrapPress by: <a href="http://www.youtube.com/user/BragInteractive?feature=watch">BragInteractive</a>
				</div>
			</div>
		</div>
    </footer>
<!-- / FOOTER -->
   

<!-- Le javascript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tab.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-affix.js" type="text/javascript"></script>

<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="assets/js/jquery.scrollTo-1.4.2-min.js" type="text/javascript" ></script>

<!-- responsive video-->
<script src="assets/js/jquery.fitvids.min.js" type="text/javascript"></script>
<script>
        // Basic FitVids Test
        jQuery(".container").fitVids();
          
</script>
<!-- / responsive video-->




<script>
$(document).ready(function()
{

	
$("#simple-post").click(function()
{
	$("#ajaxform").submit(function(e)
	{
		$("#simple-msg").html("<img src='loading.gif'/>");
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
				$("#simple-msg").html('<pre><code class="prettyprint">'+data+'</code></pre>');

			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#simple-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
			}
		});
	    e.preventDefault();	//STOP default action
	    e.unbind();
	});
		
	$("#ajaxform").submit(); //SUBMIT FORM
});

});
</script>



</body>
</html>