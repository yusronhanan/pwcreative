<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/material-design-iconic-font/css/material-design-iconic-font.min.css" />
    
    <link href="<?php echo base_url() ?>assets/css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
   <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/pwom.png"/>



</head>
<style type="text/css">
  
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}

/*batas*/

/*---FOR MOBILE VIEW---*/
@media screen and (max-width: 400px) {
  h1 {
    padding: 15px;
    font-size: 25px;
  }
}

</style>
<body>
  <div class="timeline-nav-bar hidden-sm hidden-xs">
         
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
              <li class="dropdown">
                <a href="<?php echo base_url() ?>auth" >Login</a>
              </li>
<!--               <li class="dropdown">
                <a href="<?php echo base_url() ?>chat" >Chat</a>
              </li>
              <li class="dropdown">
                <a href="<?php echo base_url() ?>MyAccount" >My Account</a>
             
              </li>
              <li class="dropdown"><a href="<?php echo base_url() ?>Auth/logout">Logout</a></li> -->
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
    </div>
<div class="navbar-mobile hidden-lg hidden-md">


<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
         

          <div class="navbar-header">
            <div class="col-lg-12"></div>
            <form class="searchmobile">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
            
          <!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- <div class="col-lg-12">
            <div class="form-group">
                <div class="input-group input-group-unstyled">
                    <input type="text" class="form-control"
                           placeholder="Search" id="inputGroup"/>
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
    </div> -->
  </div>
</div>
</div>
    <?php  $this->load->view($main_view); ?>
<div class="navbar-mobile hidden-lg hidden-md">

<div id="footer">
  <div class="col-xs-12 navbar-inverse navbar-fixed-bottom">
  <div class="row center" id="bottomNav">
    <div class="col-xs-3 text-center"><a href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-home"></i><br>Home</a></div>
    <div class="col-xs-3 text-center"><a href="<?php echo base_url() ?>inspiration"><i class="glyphicon glyphicon-sort-by-order"></i><br>Inspiration</a></div>
    <div class="col-xs-3 text-center"><a href="<?php echo base_url() ?>job"><i class="glyphicon glyphicon-briefcase"></i><br>Hire Job</a></div>
    <div class="col-xs-3 text-center"><a href="<?php echo base_url() ?>auth"><i class="glyphicon glyphicon-log-in"></i><br>Login</a></div></div>
  </div>
</div>
</div>
<?php if (empty($hidden_addpost)) {
  
 ?>

<!--Button Menu for Large Screens End-->
<?php } ?>
  <script src="<?php echo base_url() ?>assets/js/jquery.sticky-kit.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/script.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>



    <script src="<?php echo base_url() ?>assets/js/masonry.pkgd.min.js"></script>
  
    <!-- <script src="<?php echo base_url() ?>assets/js/jquery.scrollbar.min.js"></script> -->
    
    <!-- <script src="<?php echo base_url() ?>assets/js/jquery.waterfall.js"></script>  -->
<!--preloader-->
    


</body>
</html>
