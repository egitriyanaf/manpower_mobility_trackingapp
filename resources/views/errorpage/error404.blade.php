
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Error Page</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('errortemplate/css/base.css')}}">  
   <link rel="stylesheet" href="{{asset('errortemplate/css/main.css')}}">
   <link rel="stylesheet" href="{{asset('errortemplate/css/css/vendor.css')}}">     

   <!-- script
   ================================================== -->
	<script src="{{asset('errortemplate/js/modernizr.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset('assets/dist/img/adflogo.png') }}">

</head>

<body>

	<!-- header 
   ================================================== -->
   <header class="main-header">
   	<div class="row">
   		<div class="logo">
	         <img src="{{asset('assets/dist/img/ADF-Logo.png')}}" width="250" height="200" alt="Logo ADF">
	      </div>   		
   	</div>   

   	
   </header> <!-- /header -->

   <!-- navigation 
   ================================================== -->
   

	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-particle-js">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
			  		
			  			<h1 class="kern-this">404 Error.</h1>
			  			<p>
						Oooooops! Looks like nothing was found at this location.
						Maybe try on of the links below, click on the top menu
						or try a search?
			  			</p>

			  			<div class="search">
				      	<form>
								<input type="text" id="s" name="s" class="search-field" placeholder="Type and hit enter …">
							</form>
				      </div>	   			

			   	</div> <!-- /twelve --> 		   			
		   	</div> <!-- /row -->    		 		
		   </div> <!-- /main-content --> 

		   <footer>
		   	<div class="row">
		   	</div> <!-- /row -->    		  		
		   </footer>

		</div> <!-- /content-wrap -->
   
   </main> <!-- /main-404-content -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="{{asset('errortemplate/js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{asset('errortemplate/js/plugins.js')}}"></script>
   <script src="{{asset('errortemplate/js/main.js')}}"></script>

</body>

</html>