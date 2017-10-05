<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>PWOM</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/style.css" />
		<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
	
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php  echo base_url() ?>assets/images/fav.png"/>
	</head>
	<body>

    <!-- Header
    ================================================= -->
		
         
<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
         

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo" />
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="<?php echo base_url() ?>" ">Home</a>
                
              </li>
              <li class="dropdown">
                <a href="<?php echo base_url() ?>inspiration" >Inspiration</a>
              </li>
              <li class="dropdown">
                <a href="<?php echo base_url() ?>job" >Hire Job</a>
              </li>
                </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
       <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make a Good Society</h1>
            	<p><strong>PWOM</strong> is a good environment belongs to you who want share creative thing and also you can hire Job.</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#register" data-toggle="tab">Sign Up</a></li>
                  <li><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Sign Up</h3>
                  <p class="text-muted">Be creative and get your cool environment.</p>
                  
                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' method="post" enctype="multipart/form-data" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="name" class="sr-only">Full Name</label>
                        <input id="name" class="form-control input-group-lg" type="text" name="name" title="Enter Full name" placeholder="Full name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="username" class="sr-only">Username</label>
                        <input id="username" class="form-control input-group-lg" type="text" name="username" title="Enter first name" placeholder="Username"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" id="password-signup"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group has-feedback col-xs-12" >
                        <label for="repassword" class="sr-only">Re-enter Password</label>
                        <input class="form-control input-group-lg" type="password" name="repassword" id="repassword-signup" title="Re-enter password" placeholder="Re-enter Password"/>
                      </div>
                    </div>
                    
                    
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="male">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="female">Female
                      </label>
                    </div>


                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city" class="sr-only">City</label>
                        <input id="city" name="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="City"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="country" class="sr-only"></label>
                        <select class="form-control" id="country" name="country">
                          <option value="country" disabled selected>Country</option>
                        <?php  
                        	foreach ($countries as $country) {
                        		?>
                        		<option value="<?php echo $country->iso ?>"><?php echo $country->nicename ?></option>
                        	<?php
                        	}
                        ?>

                          
                        </select>
                      </div>

                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="phone" class="sr-only">Phone</label>
                        <input id="phone" class="form-control input-group-lg" type="text" name="phone" title="Enter Phone Number" placeholder="Phone"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="interest" class="sr-only">Interest</label>
                        <input id="interest" class="form-control input-group-lg" type="text" name="interest" title="Enter Your Interest" placeholder="Interest"/>
                      </div>
                    </div>
                  </form><!--Register Now Form Ends-->
                  <p><a href="#login" data-toggle="tab">Already have an account?</a></p>
                  <button class="btn btn-primary" id="signup">Sign Up Now</button>
                  <button class="btn btn-danger registration_form" id="reset">Reset</button>
                  
                </div><!--Registration Form Contents Ends-->
                
                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Login to your account</p>
                  
                  <!--Login Form-->
                  <form name="Login_form" id='login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-username_email" class="sr-only">Username or Email</label>
                        <input id="my-username_email" class="form-control input-group-lg" type="text" name="username_email" title="Enter Username or Email" placeholder="Your username or email"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends--> 
                  <p><a href="#">Forgot Password?</a></p> <!-- use hash for forgot password. send email with random password or let make new landing page, and then input a new password for send to his email and update data in database -->
                  <button class="btn btn-primary" id="login">Login Now</button>
                  <button class="btn btn-danger login_form" id="reset">Reset</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row"> -->
          <!-- <div class="col-sm-6 col-sm-offset-6"> -->
          
            <!--Social Icons-->
      <!--       <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="<?php  echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/jquery.appear.min.js"></script>
		<script src="<?php  echo base_url() ?>assets/js/jquery.incremental-counter.js"></script>
    <script src="<?php  echo base_url() ?>assets/js/script.js"></script>
    <script type="text/javascript">
	// $(document).ready(function() {


	// 			 });
	$("button#login").click(function() {
	$("#login_form").submit();
	});

	$( "button#signup" ).click(function() {
	$("#registration_form").submit();
	});

	$("#login_form").submit(function(e){
		 $.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Auth/login",
           data: new FormData(this),
           // cache: false,
	       // dataType: 'json',
	       processData: false, // Don't process the files
	       contentType: false,
           success: function(data)
           {
           	// alert(data);
           	if (data == "TRUE") {
           		resetform();
           		swal({
				title: 'Login Success !',
				text: 'You will be redirect to Home Page. Wait a moment',
				timer: 3000,
				onOpen: function () {
				swal.showLoading()
				}
				}).then(
				function () {},
				// handling the promise rejection
				function (dismiss) {
				if (dismiss === 'timer') {
				  window.location = "<?php echo base_url() ?>Home";
				}
				}
				)

			}
			else if(data == "FALSE"){
				swal(
				  'Oopss..',
				  'Something went wrong.. Check your email/username or password',
				  'error'
				)
			}
			else{
				swal(
				  'Oopss..',
				  data,
				  'error'
				)	
			}
           }
         });

    e.preventDefault();
	}); 
		
	$("#registration_form").submit(function(e){
		$.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Auth/signup",
           data: new FormData(this),
           // cache: false,
	       // dataType: 'json',
	       processData: false, // Don't process the files
	       contentType: false,
           success: function(data)
           {
           	// alert(data);
           	if (data == "TRUE") {
           		resetform();
           		swal({
				title: 'Signup Success !',
				text: 'You will receive validation account in your email',
				timer: 2000,
				onOpen: function () {
				swal.showLoading()
				}
				}).then(
				function () {},
				// handling the promise rejection
				function (dismiss) {
				if (dismiss === 'timer') {
				  swal(
					  'Validation account sent !',
					  'Check your email for validation your account!',
					  'success'
					)
				}
				}
				)
			}
			else if(data == "username_exist" || data == "email_exist"){
				if (data == "username_exist") {
					var msg = "Username what you choose Already exist";
				}
				else if (data == "email_exist"){
					var msg = "Email what you choose Already exist";				 
				}
				swal(
				  'Aw aw..',
				  msg,
				  'error'
				)
			}
			else if (data == "FALSE") {
				swal(
				  'Oopss',
				  'Something went wrong, try again !',
				  'error'
				)
			}
			else if (data == "password_not_same") {
				swal(
				  'Almost done !',
				  'Your re-enter password is not same with your enter password',
				  'error'
				)
			}
			
			else{
				swal(
				  'Oopss..',
				   data,
				  'error'
				)
			}

           }
         });

    e.preventDefault();
	}); 
	
	$("button#reset").on('click', resetform);

	function resetform() {
		if ($(this).hasClass("registration_form")) {
		document.getElementById("registration_form").reset();		
		}
		else if ($(this).hasClass("login_form")) {
		document.getElementById("login_form").reset();		
		}
		else{
			document.getElementById("login_form").reset();		
			document.getElementById("registration_form").reset();		
			
		}
    }

    $("input").bind('keyup mouseup', function (event) {
   	var input = $(this).val();
   	var attribute = $(this).attr('id');

   	if (attribute == "username") {
   		$.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Auth/check_usernameemail",
           context: this,
           data: {value:input, type:attribute},
           // cache: false,
	       // dataType: 'json',
	       // processData: false, // Don't process the files
	       // contentType: false,
           success: function(data)
           {
           	// alert(data);
           	if (data == "username_exist") {
        $("span."+attribute).remove();
    	$(this).parent().removeClass('has-success has-feedback');
    	$(this).parent().addClass('has-error has-feedback');
		$(this).after('<span class="glyphicon glyphicon-remove form-control-feedback '+attribute+'"></span>');    	   		
			}
			else if (data == "username_not_exist"  && $.trim(input).length > 3) {
		$("span."+attribute).remove();
    	$(this).parent().removeClass('has-error has-feedback');
    	$(this).parent().addClass('has-success has-feedback')
		$(this).after('<span class="glyphicon glyphicon-ok form-control-feedback '+attribute+'"></span>');      
			}
		}
   	});
   	}
   	else if(attribute == "email"){
   		$.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Auth/check_usernameemail",
           context: this,
           data: {value:input, type:attribute},
           // cache: false,
	       // dataType: 'json',
	       // processData: false, // Don't process the files
	       // contentType: false,
           success: function(data)
           {
           	// alert(data);
           	if (data == "email_exist" ) {
		$("span."+attribute).remove();
    	$(this).parent().removeClass('has-success has-feedback');
    	$(this).parent().addClass('has-error has-feedback');
		$(this).after('<span class="glyphicon glyphicon-remove form-control-feedback '+attribute+'"></span>');     
		         	   		
			}
			else if (data == "email_not_exist" && $.trim(input).length > 6) {
		$("span."+attribute).remove();
    	$(this).parent().removeClass('has-error has-feedback');
    	$(this).parent().addClass('has-success has-feedback')
		$(this).after('<span class="glyphicon glyphicon-ok form-control-feedback '+attribute+'"></span>');    
			}
		}
   	});
   	}
   	 	else if(attribute=="my-username_email"){
   			$.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Auth/check_usernameemail",
           context: this,
           data: {value:input, type:attribute},
           // cache: false,
	       // dataType: 'json',
	       // processData: false, // Don't process the files
	       // contentType: false,
           success: function(data)
           {
           	// alert(data);
           	if (data == "username_email_exist") {
        $("span."+attribute).remove();
    	$(this).parent().removeClass('has-error has-feedback');
    	$(this).parent().addClass('has-success has-feedback');
		$(this).after('<span class="glyphicon glyphicon-ok form-control-feedback '+attribute+'"></span>');    	   		
			}
			else if (data == "username_email_not_exist") {
		$("span."+attribute).remove();
    	$(this).parent().removeClass('has-success has-feedback');
    	$(this).parent().addClass('has-error has-feedback')
		$(this).after('<span class="glyphicon glyphicon-remove form-control-feedback '+attribute+'"></span>');      
			}
		}
   	});
   	}
   	else if(attribute == "repassword-signup"){
   		var password = $("input#password-signup").val();
   	 	var repassword = $(this).val();

   	 	if (repassword != password || $.trim(password).length < 1) {
    	$("span.repassword").remove();
    	$(this).parent().removeClass('has-success has-feedback');
    	$(this).parent().addClass('has-error has-feedback');
		$(this).after('<span class="glyphicon glyphicon-remove form-control-feedback repassword"></span>');    		
    	}
    	else if (repassword == password) {
    	$("span.repassword").remove();
    	$(this).parent().removeClass('has-error has-feedback');
    	$(this).parent().addClass('has-success has-feedback')
		$(this).after('<span class="glyphicon glyphicon-ok form-control-feedback repassword"></span>');    		
    	}
   	}
   	else if(attribute== "gender"){
   		// nothing
   	}
   	else if(attribute== "search"){
   		// nothing
   	}
   	else if(attribute== "interest"){
   		if ($.trim(input).length > 3  ) {
    	$("span."+attribute).remove();
    	$(this).parent().removeClass('has-error has-feedback');
    	$(this).parent().addClass('has-success	 has-feedback');
		$(this).after('<span class="glyphicon glyphicon-ok form-control-feedback '+attribute+'"></span>');    		
    	}
   	}
  
   	else if(attribute=="my-password"){
   			// nothing
   	}
   	else{
   	 	if ($.trim(input).length < 2  ) {
    	$("span."+attribute).remove();
    	$(this).parent().removeClass('has-success has-feedback');
    	$(this).parent().addClass('has-error has-feedback');
		$(this).after('<span class="glyphicon glyphicon-remove form-control-feedback '+attribute+'"></span>');    		
    	}
    	else if ($.trim(input).length > 6) {
    	$("span."+attribute).remove();
    	$(this).parent().removeClass('has-error has-feedback');
    	$(this).parent().addClass('has-success has-feedback')
		$(this).after('<span class="glyphicon glyphicon-ok form-control-feedback '+attribute+'"></span>');    		
    	}
    	} 
});
    

    
	
</script>
	</body>
</html>
