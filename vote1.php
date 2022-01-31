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

fieldset {
    margin: 17px;
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
     $chaine = "";
	 $requet3 = "SELECT count(idPoste) FROM poste ";
	 $nbp=0;
	 if($result3 = mysqli_query($id,$requet3)){
		$candidat = mysqli_fetch_row($result3);
		$nbp = $candidat[0];
	}
	 $nb = 1;
	foreach($_POST as $val)
	{
	
	  if($nb == $nbp)
	  {
	  $chaine = $chaine."(NULL,".$val.")";
	  break;
	  }
	  
	  else
	  $chaine = $chaine."(NULL,".$val."),";
	  $nb++;
	}
	$requet = "INSERT  INTO vote (idVote, idCandidat)  VALUES $chaine;";
	   //Test d'execution de la requête SQL     
	if(mysqli_query ($id,$requet)) 
	     {
		 echo'<script language="javascript">
		       alert("Succes !");
	       </script>';
		  
		 }
		  else
		       {
			     echo'<script language="javascript">
		       alert("Echec");
	            </script>';
			   }

echo'<script language="javascript">
		          document.location="vote2.php"
			      </script>';
  }

   ?><div align="center"> <img src="images/Logo_vote.svg" style="width:8%" /></div>
	<!-- BEGIN MAIN -->
    <section id="main" class="container_16">
	
		<!-- BEGIN HEADER BAR --> 
        
        <!-- BEGIN NAVIGATION MENU -->
        <!-- END TOP NAVIGATION MENU -->
        
        <!-- BEGIN PAGE CONTAINER -->
        <section id="maincontainer">
        
            <!-- BEGIN PAGE HEADER (NORMAL) -->
            <div id="fixed_page header">
                
                <div class="fixed_page head">
				<br>
                    <h1 style="color: #fff; font-size: 20px;" align="center">Veuillez choisir un candidat pour chaque poste . . . . . . . . . . . . . . . . . . .  اختـــــــــر مرشحــــــــا لكــل منصـــــــب 
						
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

			<br>
					
					<div class="toggle_container" style="color: #fff; font-size: 23px;" align="center">
						<div class="block">
							<form action="" method="post" name="vote" id="vote">
								 <table >
								          <?php
	                                        $nb = 0;
                                           
										   $requet1 = "SELECT * FROM poste";
										   if($result1 = mysqli_query($id,$requet1))
	                                         {
											  echo "<tr>";
										   while($poste = mysqli_fetch_row($result1))
		                                        {
			                                     $id    = $poste[0];
				                                 $lib   = $poste[1];
												 
												 $requet2 = "SELECT * FROM candidat WHERE idPoste =\"$id\"";


												 
												 $postAr='';
												 if($id==1)
													$postAr='الرئـيـــــس';
												 if($id==2)
													$postAr='الأميــــــن العــام';
												 if($id==3)
													$postAr='المسؤول عن الشؤون الإجتمـــــاعيــة';
												 if($id==4)
													$postAr='مدقق حسابات';
												 if($id==5)
													$postAr='المسؤول عن الشؤون المـــــــاليــة';
												 if($id==7)
													$postAr=' المسؤول عن العـــلاقــات الخـــارجيــة';
												 if($id==8)
													$postAr='المسؤول عن الشؤون  الـرياضـــــيـــة';
												 
												 if($nb % 2 == 0)
												        echo"</tr><tr>";
												 echo "<td ><fieldset>
									              <label align='right'>".$postAr."<br>".$lib."</label>
												  <div>
									              <select style='width:200px' name=".$id." class='select_box'>";
												  $connec = mysqli_connect("localhost", "root", "", "vcheikh");

												  $result2 = mysqli_query($connec,$requet2);

												 

										         while($candidat = mysqli_fetch_row($result2))
		                                        {
			                                     $idc    = $candidat[0];
				                                 $nom   = $candidat[1];
									             echo" <option id=".$idc." value=".$idc.">".$nom."</option>
								                  
												  ";
												  }
												  
												  echo" 
								                  </select>
								                 </div>
												  ";
												  $nb++;
				                                 
				                                }
												}
												?>
										 
										
								 </table>
                                
                            
								<div class="padding_10">	
								<br>
								 
									<button align="center" type="submit" name="envoyer" class="button blue" style="font-size: 30px;"> <img src="images/vote.png" />Voter  </button>
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
