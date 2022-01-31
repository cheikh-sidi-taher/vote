<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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

th {
    background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));
    border: 3px solid #87aade;
	padding: 15px;
}
</style>


<body>
<?php
if(isset($_POST['envoyer']))
  {
     
			     echo'<script language="javascript">
					document.location="social.php"
	            </script>';

  }


	$erreur = "";
//Apel au paramètres de connexion(connect.php)
             include("connection/connect.php");
             $requet = "SELECT libPoste, nom, COUNT(*) as nbVote FROM vote v, candidat c, poste p WHERE v.idCandidat = c.idCandidat AND c.idPoste = p.idPoste and p.idPoste=2 GROUP By p.idPoste, c.idCandidat ORDER BY p.idPoste,  nbVote DESC";
             $requet1 = "SELECT  nom FROM candidat WHERE candidat.idCandidat NOT IN (SELECT idCandidat FROM vote) AND candidat.idPoste = 2";
	   //Test d'execution de la requête SQL  
	    
					?><div align="center"> <img width=10% src="images/Logo_vote.svg"  /></div>
	<!-- BEGIN MAIN -->
    <section id="main" class="container_16">
	
	
        <!-- BEGIN PAGE CONTAINER -->
        <section id="maincontainer" style="color: #fff; font-size: 20px;">
        
            <!-- BEGIN PAGE HEADER (NORMAL) -->
            <div id="fixed_page header" >
                
                <div class="fixed_page head">
				<br>
                    <h1 align ="center">Resultat de vote . . . . . . . . . . . . . . . . . . . . . . . .نتائج التصويت 
						<span class="tools">
							
						</span>
					</h1>
                </div> <!-- end div .fixed_page.head -->
                
            </div>
            <!-- END PAGE HEADER (NORMAL) -->
            
			<!-- BEGIN BREADCRUMB (NORMAL) -->
			<div class="fixed_page breadcrumb">
				<ul class="pagewrap">
					
				</ul>                                   
			</div><!-- end div .fixed_page.breadcrumb -->
			<!-- END BREADCRUMB (NORMAL) -->
                
			<!-- BEGIN PAGE CONTENT (NORMAL)  -->
			<div class="fixed_page content">	
            	
                
				<div class="box grid_16 alpha" align="center">
				<br><br>

				<h3>Secrétaire General  الأميــن العـام</h3>
				<br><br>

					<div class="block">
					 
						
							<?php
	   if($result = mysqli_query($id,$requet) AND $result1 = mysqli_query($id,$requet1))
	     {
		  //Récuperation du résultat de la requête SQL
								  echo"	<table class='static'>
										  <thead>
											<tr>
											  <th ><h3>les Candidats المــرشحيـــن</h3></th>
											  <th ><h3>Nombre  العــدد</h3></th>

											  
											</tr>
										  </thead>
										  <tbody>
											<tr>";
							  while($ligne = mysqli_fetch_row($result))
		                       {
			                    $poste = $ligne[0];
				                $candidat    = $ligne[1];
				                $nb        = $ligne[2];
								
								 echo"	
							             <th>".$candidat."</th>
							             <th>".$nb."</th>
							  
							              </tr>";				                 
								}
								
								while($ligne = mysqli_fetch_row($result1))
		                       {
			                    $candidat0 = $ligne[0];
								
								 echo"	
							             <th>".$candidat0."</th>
							             <th>0</th>
							  
							              </tr>";				                 
								}


				}		
					?>
						  </tbody>
						</table>
					</div>
				</div>
				
				
											<form action="" method="post" name="vote" id="vote">
											<br><br>
								
								<div class="padding_10" align ="center">	
								
								 
									<button align="center" type="submit" name="envoyer" class="button blue"  style="font-size: 30px;" > Suivant</button>
									<img   src="images/next.png" style="width: 40px;margin: 0 0 -7px 0px;"  />
									<button><a  href ='http://localhost:8080/tourad' style="color: #000; font-size: 30px;">Aller à l'accueil</a></button>

									
									
									<div class="clear"></div><!-- CLEAR BOTH -->
									
								</div>

							</form>

				
				
			  
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
    <script type="text/javascript" src="scripts/DataTables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="scripts/MaxMin/maxmin_datatables.js"></script>
	<!-- END JAVACSRIPTS FOR THIS PAGE -->
	
	<!-- BEGIN LOADING OVERLAY -->
    
	<!-- END LOADING OVERLAY -->
    
</body>
</html>