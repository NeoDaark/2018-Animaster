<?php
define ('host_address','http://localhost/404/');
define ('host_base','http://localhost/');

?>

<!DOCTYPE html>
<head>
   <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
	<title>404</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo host_address ?>css/base.css">  
   <link rel="stylesheet" href="<?php echo host_address ?>css/main.css">
   <link rel="stylesheet" href="<?php echo host_address ?>css/vendor.css">     

   <!-- script
   ================================================== -->
	<script src="<?php echo host_address ?>js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo host_address ?>favicon.ico">

</head>

<body>
	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-static">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
			  		
			  			<!-- <h1 class="kern-this">404 Error</h1> -->
						<div class="row">
							<div class="logo">
								<a href="<?php echo host_address ?>"></a>
							</div>   		
						</div>  
			  			<p>
						¡Oooooops! Looks like nothing was found at this location.
						Maybe you can try with the links below and good luck :3
			  			</p>	   			

			   	</div> <!-- /twelve --> 		   			
		   	</div> <!-- /row -->    		 		
		   </div> <!-- /main-content --> 

		   <footer>
		   	<div class="row">
		   			
		  			<div class="col-five tab-full bottom-links">
			   		<ul class="links">
				   		<li><a href="<?php echo host_base ?>">Homepage</a></li>
				         <li><a href="mailto:DaarkAssassin@gmail.com">Report Error</a></li>			                    
				   	</ul>
			   	</div>   		   		

		   	</div> <!-- /row -->    		  		
		   </footer>

		</div> <!-- /content-wrap -->
   
   </main> <!-- /main-404-content -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="<?php echo host_address ?>js/jquery-2.1.3.min.js"></script>
   <script src="<?php echo host_address ?>js/plugins.js"></script>
   <script src="<?php echo host_address ?>js/main.js"></script>

</body>

</html>