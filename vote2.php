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

<body>
      <?php
	$erreur = "";
//Apel au paramètres de connexion(connect.php)
include("connection/connect.php");

//Verification de l'envoie et l'existance des variables de formulaire
if(isset($_POST['envoyer']))
  {
     
			     echo'<script language="javascript">
					document.location="vote1.php"
	            </script>';

  }

   ?>
	<!-- BEGIN MAIN --><div align="center"> <img src="images/Logo_vote.svg" style="width:8%" /></div>
    <section id="main" class="container_16">
	
		<!-- BEGIN HEADER BAR --> 
        
        <!-- BEGIN NAVIGATION MENU -->
        <!-- END TOP NAVIGATION MENU -->
        
        <!-- BEGIN PAGE CONTAINER -->
        <section id="maincontainer" style="color: #fff; font-size: 20px;">
        
            <!-- BEGIN PAGE HEADER (NORMAL) -->
            <div id="fixed_page header">
                
                <div class="fixed_page head">
				<br><br><br>
                    <h1 align="center">Merci pour votre vote . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . شكــــــرا لكـــــــم على تصـــويتكـــم
						
					</h1>
                </div> <!-- end div .fixed_page.head -->
                
            </div>
            <!-- END PAGE HEADER (NORMAL) -->
        
			<!-- BEGIN BREADCRUMB (NORMAL) -->
			<div class="fixed_page breadcrumb">
			</div><!-- end div .fixed_page.breadcrumb -->
			<!-- END BREADCRUMB (NORMAL) -->
                
			<!-- BEGIN PAGE CONTENT (NORMAL)  -->
			<div class="fixed_page content">	
            	
				<div class="box grid_16 alpha">
					
					<div class="toggle_container">
						<div class="block" align="center">
						<br><br><br><br>
							<form action="" method="post" name="vote" id="vote">
								
								<div  class="padding_10">	
								
								 
									<button align="center" type="submit" name="envoyer" class="button blue"  style="font-size: 30px;" >autre voteur</button>
									<img   src="images/Logo_vote.svg" style="width: 40px;margin: 0 0 -7px 0px;"  />
									<button><a  href ='http://localhost:8080/tourad' style="color: #000; font-size: 30px;">Aller à l'accueil</a></button>

									
									
									<div class="clear"></div><!-- CLEAR BOTH -->
									
								</div>

							</form>
							
						</div>
						
					</div>
					
				</div>
                
				<div class="clear"></div><!-- CLEAR BOTH -->
    
			</div><!-- end div .fixed_page.content -->
			<!-- END PAGE CONTENT (NORMAL) -->
        
        </section><!-- end section .maincontainer -->
        <!-- END PAGE CONTAINER -->
        
        <!-- BEGIN FOOTER -->
        <section class="footer">
		
			
			<div class="clear"></div><!-- CLEAR BOTH -->
        
        </section><!-- end section .footer -->
        <!-- END FOOTER -->
    
	</section><!-- end section #main -->
    <!-- END MAIN -->
     
	<!-- BEGIN JAVASCRIPTS FOR THIS PAGE -->
	<script src="../scripts/tags/jquery.inputtags.min.js"></script> 
    <script type="text/javascript">
		 $('.tag').tagsInput({
		  'width':'auto'
		});	
	</script>  
    <!-- END JAVASCRIPTS FOR THIS PAGE --> 
    
	<!-- BEGIN LOADING OVERLAY -->
	<!-- END LOADING OVERLAY -->
    
</body>
</html>