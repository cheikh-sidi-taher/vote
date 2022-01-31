<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    
    <title></title>
    			
	<!-- Styles -->
    
	<!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Main Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
    <link rel="stylesheet" type="text/css" href="css/960.css" />
	<link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="css/userinterfaces.css" />

	<!-- UI Styles --> 
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css">
	<link rel="stylesheet" type="text/css" href="scripts/tinyeditor/style.css">
	<link rel="stylesheet" type="text/css" href="scripts/syntax_highlighter/styles/shCore.css">
	<link rel="stylesheet" type="text/css" href="scripts/syntax_highlighter/styles/shThemeDefault.css">
	<link rel="stylesheet" type="text/css" href="scripts/uitotop/css/ui.totop.css">
	<link rel="stylesheet" type="text/css" href="scripts/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" type="text/css" href="scripts/isotope/isotope.css">
	<link rel="stylesheet" type="text/css" href="scripts/elfinder/css/elfinder.css">		
	<link rel="stylesheet" type="text/css" href="scripts/tooltip/tipsy.css">
	<link rel="stylesheet" type="text/css" href="scripts/uniform/css/uniform.aristo.css">
	<link rel="stylesheet" type="text/css" href="scripts/multiselect/css/ui.multiselect.css">
	<link rel="stylesheet" type="text/css" href="scripts/selectbox/jquery.selectBox.css">
	<link rel="stylesheet" type="text/css" href="scripts/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css">
	<link rel="stylesheet" type="text/css" href="scripts/colorpicker/css/colorpicker.css">
	<link rel="stylesheet" type="text/css" href="scripts/uistars/jquery.ui.stars.min.css">	
	<link rel="stylesheet" type="text/css" href="scripts/slidernav/slidernav.css">		
   
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
 
    <!-- Scripts -->
    <!-- JavaScript -->

	<!-- Load JQuery -->		
	<script src="scripts/jquery.min.js" type="text/javascript"></script>

	<!-- Load JQuery UI -->
	<script src="scripts/jquery-ui.min.js" type="text/javascript"></script>
		
	<!-- Global -->
	<script src="scripts/touchPunch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
	<script src="scripts/uitotop/js/jquery.ui.totop.js" type="text/javascript"></script>
				
	<!-- Forms -->
	<script src="scripts/uniform/jquery.uniform.min.js"></script>
	<script src="scripts/autogrow/jquery.autogrowtextarea.js"></script>
	<script src="scripts/multiselect/js/ui.multiselect.js"></script>
	<script src="scripts/selectbox/jquery.selectBox.min.js"></script>
	<script src="scripts/timepicker/jquery.timepicker.js"></script>
	<script src="scripts/colorpicker/js/colorpicker.js"></script>
	<script src="scripts/uistars/jquery.ui.stars.min.js"></script>
	<script src="scripts/tooltip/jquery.tipsy.js"></script>
	<script src="scripts/validation/jquery.validate.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/livequery/jquery.livequery.js"></script>  		

	<!-- Configuration Script -->
	<script type="text/javascript" src="scripts/MaxMin/maxmin_ui.js"></script>
	<script type="text/javascript" src="scripts/MaxMin/maxmin_forms.js"></script>
        
    <!-- End Scripts -->
	
</head>
<style>
body {
  background: center / 100% no-repeat url('images/bg.jpg'), #1a1a1a87 ;
  background-blend-mode: color;

}
</style>
<body >
    <?php
	$erreur = "";
//Apel au param�tres de connexion(connect.php)
include("connection/connect.php");

//Verification de l'envoie et l'existance des variables de formulaire
if(isset($_POST['envoyer']))
  {
    if((!empty($_POST['login'])) && (!empty($_POST['password'])))
	  {
	   //R�cuperation des variables de formulaire
        $login    = $_POST['login'];
        $password = $_POST['password'];
		//Envoie  de la requ�te SQL
	   $requet = "SELECT * FROM utilisateur WHERE  login = \"$login\" AND motpasse = \"$password\"";
	   //Test d'execution de la requ�te SQL  
	   //if($result = mysqli_query($id,$requet))
	    // {
		  //R�cuperation du r�sultat de la requ�te SQL

		  $result = mysqli_query($id,$requet);
		  if (!$result) {
			printf("Error: %s\n", mysqli_error($id));
			exit();
		}
		  while($ligne = mysqli_fetch_row($result))
		       {
			    $identifiant = $ligne[0];
				$motpasse    = $ligne[1];
				$type        = $ligne[2];
				}
		   //V�rification des donn�es d'authentification
		    if(!empty($identifiant))
			  {
			   if($motpasse == $password)
			     {
				  // session identifi�e, cr�ation des variables de session et redirection vers la page acceuil 
		          session_start();
		          $_SESSION["login"]     =  $identifiant;
		          $_SESSION["profil"]   =  $type;
				 
				 if($_SESSION["profil"] == 1)
				  echo'<script language="javascript">
		               document.location="president.php"
			           </script>';
				 if($_SESSION["profil"] == 0)
				  echo'<script language="javascript">
		               document.location="vote1.php"
			           </script>';
				 }
				  else
				      $erreur = "Veuilliez authentifier, les informations saisies ne sont pas correcte !";
			 }
			  else
			      $erreur = "Veuilliez authentifier, les informations saisies ne sont pas correcte ! !";
			
			
		  }	
		     
	  // }
  }
?>
	<!-- BEGIN MAIN -->
    <section id="main" class="container_16">
        
        <!-- BEGIN PAGE CONTAINER -->
        <section id="login_page">
        
            <!-- BEGIN PAGE HEADER (NORMAL) -->
            <div id="header" class="grid_8" >
				<div align="center"> <img width=10% src="images/Logo_vote.svg"  /></div>
				 <?php echo "<center>".$erreur."</center>";?>
				
                <div align="center" class="login_page head blue_gradient">
                    <ul>
                      <li class="active"><a href="#tab1"></a></li>
                  
                    </ul>
                </div> 
                
            </div>
            <!-- END PAGE HEADER (NORMAL) -->
                
			<!-- BEGIN PAGE CONTENT (NORMAL)  -->
			<div id="tab1" class="grid_8 content tab-page" align="center">	
            
				<form action="" method="post" name="login" id="login">
								
                    <fieldset>
					<br>
					<br><br><br><br><br><br>
						<label style="color: #fff; font-size: 23px;">Enter le nom d'utilisateur :</label>
						<div>
						<br>
							<input style="width:250px" type="text" name="login" class="percent required">
						</div>
					</fieldset>
					
                    <fieldset>
					<br>
						<label style="color: #fff; font-size: 23px;">Enter le mot de passe :</label>
						<div>
						<br>
							<input style="width:250px" type="password" name="password" class="percent required">
						</div>
					</fieldset>

					<div class="padding_10">	
					<br>								
						<button type="submit"  name = "envoyer" class="button blue"> <img src="images/login.png" /> Connexion </button>
						<button type="reset" class="button green"> <img src="images/cancel.png" /> Annuler </button>
						<div class="clear"></div>
					</div>
								
				</form>
				
			</div><!-- end div .fixed_page.content -->
			<!-- END PAGE CONTENT (NORMAL) -->
		
				
			</div><!-- end div .fixed_page.content -->
			<!-- END PAGE CONTENT (NORMAL) -->
        
        </section><!-- end section .maincontainer -->
        <!-- END PAGE CONTAINER -->
		
        <div class="clear"></div><!-- CLEAR BOTH -->
        
		<!-- BEGIN FOOTER -->
        <section class="footer_login">
			
			
            
			<div class="clear"></div><!-- CLEAR BOTH -->
        
        </section><!-- end section .footer -->
        <!-- END FOOTER -->
    
	</section><!-- end section #main -->
    <!-- END MAIN -->
	
	<!-- BEGIN LOADING OVERLAY -->





	<!-- END LOADING OVERLAY -->
    
</body>
</html>