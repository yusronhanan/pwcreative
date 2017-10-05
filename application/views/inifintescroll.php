<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />
    <link href="<?php echo base_url() ?>assets/css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
   <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/fav.png"/>

<style>
* { margin: 0; }

#div1 {
  margin: auto;
  position: relative;
}

.box {
  float: left;
  padding: 10px;
  border: 1px solid #ccc;
  background: #f7f7f7;
  box-shadow: 0 0 8px #ccc;
}

.box:hover { box-shadow: 0 0 10px #999; }

.box img { width: 200px; }
</style>
<!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

</head>
<body>
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
            <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" ">Home</a>
                
              </li>
              <li class="dropdown">
                <a href="#" >Newsfeed</a>
                
              </li>
              <li class="dropdown">
                <a href="#" >Timeline</a>
               
              </li>
              <li class="dropdown">
                <a href="#" >All Pages</a>
             
              </li>
              <li class="dropdown"><a href="<?php echo base_url() ?>Auth/logout">Logout</a></li>
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
    <div class="create-post">
            <p>Popular</p>
              <div class="row">
                <!-- <div class="col-md-5 col-sm-5">
                  <div class="form-group">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div> -->
                <div class="col-md-12 col-sm-12">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <!-- <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li> -->
                      <li><button class="btn btn-primary pull-right" style="background-color: #f4bf42"><i class="icon ion-android-bicycle"></i> Bycicle</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #f44242"><i class="icon ion-ios-camera"></i> Photgraphy</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #4159f4"><i class="icon ion-android-cart"></i> Shopping</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #ca41f4"><i class="icon ion-android-plane"></i> Traveling</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #82007b"><i class="icon ion-android-restaurant"></i> Eating</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #008261"><i class="icon ion-android-restaurant"></i> Eating</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #00d2d6"><i class="icon ion-android-restaurant"></i> Eating</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #168799"><i class="icon ion-android-restaurant"></i> Eating</button></li>
                      <li><button class="btn btn-primary pull-right" style="background-color: #00d2d6"><i class="icon ion-android-restaurant"></i> Eating</button></li>
                        

                    </ul>
                    <!-- <button class="btn btn-primary pull-right">Publish</button> -->
                  </div>
                </div>
              </div>
            </div>
    <!--Header End-->
<div id="div1">
  <div class="box"><img src="<?php echo base_url() ?>assets/images/01.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/02.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/03.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/04.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/05.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/06.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/07.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/01.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/02.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/03.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/04.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/05.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/06.jpg" alt=""></div>
  <div class="box"><img src="<?php echo base_url() ?>assets/images/07.jpg" alt=""></div>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.waterfall.js"></script> 
<script>
$("#div1").waterfall({
    itemClass: ".box",
    minColCount: 2,
    spacingHeight: 10,
    resizeable: true,
    ajaxCallback: function(success, end) {
        var data = {"data": [
            { "src": "03.jpg" }, { "src": "04.jpg" }, { "src": "02.jpg" }, { "src": "05.jpg" }, { "src": "01.jpg" }, { "src": "06.jpg" }
        ]};
        var str = "";
        var templ = '<div class="box" style="opacity:0;filter:alpha(opacity=0);"><div class="pic"><img src="<?php echo base_url() ?>assets/images/{{src}}" /></div></div>'

        for(var i = 0; i < data.data.length; i++) {
            str += templ.replace("{{src}}", data.data[i].src);
        }
        $(str).appendTo($("#div1"));
        success();
        end();
    }
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/masonry.pkgd.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/jquery.sticky-kit.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/jquery.scrollbar.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/jquery.waterfall.js"></script>  -->

</body>
</html>
