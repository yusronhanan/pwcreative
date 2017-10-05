
<style type="text/css">
  *, *:before, *:after {box-sizing:  border-box !important;}

.mas-only {
 -moz-column-width: 18em;
 -webkit-column-width: 18em;
 -moz-column-gap: .5em;
 -webkit-column-gap: .5em; 
  
}

.panel {
 
 display: inline-block;
 margin:  .5em;
 padding-bottom:4px;
  background-color: white;
 width:98%;
  -ms-word-break: break-all;
     word-break: break-all;

     /* Non standard for WebKit */
     word-break: break-all;

-webkit-hyphens: auto;
   -moz-hyphens: auto;
        hyphens: auto;
  border-radius: 0.8em ;
}
div.panel p {
margin:15px;
}
    div.panel h4 {
margin-left:15px;
color:black;
}
.img-main{
border-radius: 0.8em;
width:100%;
/*width: auto;*/
height: auto;
}
@import "bootstrap";


.smll{
  margin: 6px 5px;
  font-size:6pt;  
 }
.img-circle {
    
    border-radius: 50%;
    margin: 5px 15px;
}
.ionion{
  font-size:50px;
}

/* Isotope Transitions
------------------------------- */
.isotope,
.isotope .item {
  -webkit-transition-duration: 0.8s;
     -moz-transition-duration: 0.8s;
      -ms-transition-duration: 0.8s;
       -o-transition-duration: 0.8s;
          transition-duration: 0.8s;
}

.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
      -ms-transition-property: height, width;
       -o-transition-property: height, width;
          transition-property: height, width;
}

.isotope .item {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
      -ms-transition-property:     -ms-transform, opacity;
       -o-transition-property:         top, left, opacity;
        transition-property:         transform, opacity;*/
}
  
  
/* responsive media queries */

@media (max-width: 992px) {
  header h1 small {
    display: block;
  }

  header div.description {
    padding-top: 9px;
    padding-bottom: 4px;
  }

  .isotope .item {
    position: static ! important;
    -webkit-transform: translate(0px, 0px) ! important;
       -moz-transform: translate(0px, 0px) ! important;
            transform: translate(0px, 0px) ! important;
  }
}
.button-post {
  -webkit-transition: 0.4s;
  -moz-transition: 0.4s;
  transition: 0.4s;
  /*position: absolute;*/
  /*right: 50px;*/
  /*bottom: 50px;*/
/*  position: fixed;
    bottom:20px;
    right: 20px;*/
  width: 50px;
  height: 50px;
  padding:7px;
  border-radius: 50%;
  /*background-color: #ffffff;*/
  /*color: #656565;*/
  font-size: 24px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26), 0 2px 10px 0 rgba(0, 0, 0, 0.22);
  cursor: pointer;
}
.button-post:hover {
  background: #329ecc;
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.28), 0 4px 15px 0 rgba(0, 0, 0, 0.25);
}
.button-post a {
  -webkit-transition: 0.4s;
  -moz-transition: 0.4s;
  transition: 0.4s;
  opacity: 0;
  width: 0px;
  height: 0px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  color: #FFFFFF;
  font-size: 24px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26), 0 2px 10px 0 rgba(0, 0, 0, 0.22);
  cursor: pointer;
}
.button-post a:hover {
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.28), 0 4px 15px 0 rgba(0, 0, 0, 0.25);
}
.button-post a:nth-child(2) {
  -webkit-transition-delay: 0.3s;
  -moz-transition-delay: 0.3s;
  transition-delay: 0.3s;
  position: absolute;
  right: 30px;
  bottom: 30px;
  background: #55acee;
}
.button-post a:nth-child(3) {
  -webkit-transition-delay: 0.4s;
  -moz-transition-delay: 0.4s;
  transition-delay: 0.4s;
  position: absolute;
  right: 30px;
  bottom: 30px;
  background: #dc4e41;
}
.button-post a:nth-child(4) {
  -webkit-transition-delay: 0.5s;
  -moz-transition-delay: 0.5s;
  transition-delay: 0.5s;
  position: absolute;
  right: 30px;
  bottom: 30px;
  background: #3F3F3F;
}
.button-post:hover a {
  opacity: 1;
  width: 50px;
  height: 50px;
}
.button-post:hover a:nth-child(2) {
  right: -80px;
  bottom: 0px;
}
.button-post:hover a:nth-child(2):hover {
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  transition-delay: 0s;
  background: #3ea1ec;
}
.button-post:hover a:nth-child(3) {
  right: -160px;
  bottom: 0px;
}
.button-post:hover a:nth-child(3):hover {
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  transition-delay: 0s;
  background: #d83a2b;
}
.button-post:hover a:nth-child(4) {
  right: -240px;
  bottom: 0px;
}
.button-post:hover a:nth-child(4):hover {
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  transition-delay: 0s;
  background: #323232;
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://bootstraptema.ru/plugins/2017/b-waterfall/bootstrap-waterfall.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.1/masonry.pkgd.min.js" ></script>

<div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="form-group">
                      <!-- <img src="http://placehold.it/300x300" alt="" class="profile-photo-md" /> -->
                      <!-- <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea> -->
                    <div class="tools">
<div class="timeline-nav-bar hidden-sm hidden-xs">

            <div class="button-post btn btn-primary pull-left"><i class="fa fa-plus"></i>
                <a href="#"><i class="zmdi zmdi-camera-add"></i></a>
                <a href="#"><i class="zmdi zmdi-view-quilt"></i></a>
                <a href="#"><i class="zmdi zmdi-puzzle-piece"></i>   </a>
            </div>
            <p>Add Post</p>
</div>
<div class="navbar-mobile hidden-lg hidden-md">
      <div class="row">
                <a href="#" class="btn btn-primary btn-circle btn-xl" style="padding:14px;font-size: xx-large;"><i class="zmdi zmdi-camera-add"></i></a>
                <a href="#" class="btn btn-primary btn-circle btn-xl" style="padding:14px;font-size: xx-large;"><i class="zmdi zmdi-view-quilt"></i></a>
                
                <a href="#" class="btn btn-primary btn-circle btn-xl" style="padding:14px;font-size: xx-large;"><i class="zmdi zmdi-puzzle-piece"></i></a>

</div>

             <!-- <ul class="publishing-tools list-inline">
                        <li ><a href="#"><i class="ion-compose ionion"></i></a></li>
                        <li ><a href="#"><i class="ion-images ionion"></i></a></li>
                        <li ><a href="#"><i class="ion-ios-videocam ionion"></i></a></li>
                        <li ><a href="#"><i class="ion-map ionion"></i></a></li>
                      </ul> -->
                    </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-5 col-sm-5"> -->
                    <!-- <div class="tools">
                      <ul class="publishing-tools list-inline">
                        <li><a href="#"><i class="ion-compose"></i></a></li>
                        <li><a href="#"><i class="ion-images"></i></a></li>
                        <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                        <li><a href="#"><i class="ion-map"></i></a></li>
                      </ul>
                      <button class="btn btn-primary pull-right">Publish</button>
                    </div> -->
                  <!-- </div> -->
                </div>
              </div><!-- Post Create Box End-->
       </div>
       </div>
                </div>
              <!-- Post Content
              ================================================= -->
<div class="mas-only">
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x300">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x1000">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/600x900">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x300">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x1000">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/600x900">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/100x300">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
      <img class="img-responsive img-main" src="http://placehold.it/300x200">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x500">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x600">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/100x300">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
      <img class="img-responsive img-main" src="http://placehold.it/300x200">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x500">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x600">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/200x600">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/200x700">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/300x800">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x700">
      <h4> KJASBDKJBSADK</h4>
      <!-- <img class="img-circle" align="left" src="http://placehold.it/25x25"> -->
      <!-- <button class="btn smll">FOLLOW</button> -->
      </div>

</div>
               
                  
       


    
<script type="text/javascript">
  $.getScript('//cdn.jsdelivr.net/isotope/1.5.25/jquery.isotope.min.js',function(){

  /* activate jquery isotope */
  $('#posts').imagesLoaded( function(){
    $('#posts').isotope({
      itemSelector : '.item'
    });
  });
  
});


$(window).scroll(function(){
    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
        // run our call for pagination
        // var table = document.getElementById("table");
        // var lastRowIndex = table.rows.length-1;
        
        alert('test sukses scroll down');
        // var last_id = getlastid-- nunggu foreach
        // loadMore(lastRowIndex);
        
    }
});

// function loadMore(lastRowIndex)
// {
// $.ajax({
//     url: "<?php ?>Backprocess/loadmore",  //controller
//     type:'GET', //bisa diganti post
//     data: {"row="+lastRowIndex}, // row wich is post
//     success: function(data){    //here data which recevie form controller
//         var json = JSON.parse(data);
//         var count = json.length; //count json data
//         var html;
//         for( var i = 0; i < count; i++ )
//         {
//             html += '<tr>';
//             html += '<td><input type="checkbox" name="id[]" id="id[]" class="check" value="'+ json[i].id +' "></td>';
//             html += '<td>'+ json[i].id +'</td>';
//             html += '<td><img src="http://localhost/CodeIgniter/upload/'+ json[i].image +'" class="img-circle" height="25" width="30"></td>';
//             html += '<td> ' + json[i].firstname +'</td>';
//             html += '<td> ' + json[i].middlename +'</td>';
//             html += '<td> ' + json[i].lastname +'</td>';
//             html += '<td> ' + json[i].address +'</td>';
//             html += '<td> ' + json[i].mobile +'</td>';
//             html += '<td> ' + json[i].email +'</td>';
//             html += '<td> ' + json[i].gender +'</td>';
//             html += '<td><a href="http://localhost/CodeIgniter/index.php/form/del/'+ json[i].id +'">Delete</a></td>';
//             html += '<td><a href="http://localhost/CodeIgniter/index.php/form/edite/'+ json[i].id +'">Update</a></td>';
//             html += '</tr>';
//         }
//         $(".mas-only").append(html); //add to in this selector
//     }   
// });
// }
</script>      