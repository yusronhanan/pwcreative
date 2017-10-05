<!-- <style type="text/css">
 
/*body{
  margin:0;
  padding:0;
  font-family:'Oswald';google font
  text-align:center;
  background:rgb(235,245,245);
}*/
#content_wrap h1{
 margin-bottom:0; 
 margin-top:0;
  border-bottom:1px solid rgb(195,200,200);
}
#love-pin {
  background-color: #ff0000;
  color:white;
}
p{
  margin-top:0;
  /*font-family:open sans;*/
}
article img{
  /*min-width:265px;*/
  /*max-width:350px;*/
  /*max-height:900px;*/
  width: 100%; height: auto;
  /*border-bottom: 1px solid #ccc;*/
  padding-bottom: 15px;
  margin-bottom: 5px;
}


#content_wrap{
 margin:0 auto;
 max-width:1400px;
 padding:10px;

}
article{
  padding:10px;
  text-align:justify;
  /*font-size:80%;*/
  background: #fefefe;
  border: 2px solid #fcfcfc;
  box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
  margin: 0 2px 15px;
  /*padding: 15px;*/
  padding-bottom: 10px;
  transition: opacity .4s ease-in-out;
  display: inline-block;
  column-break-inside: avoid;
}

@media (min-width: 590px){
  article{
   width:48%;
   height:auto;
  }
}
@media (min-width: 800px){
  article{
   width:24%;
   height:auto;
  }
}
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
</style> -->

<style type="text/css">

  *, *:before, *:after {box-sizing:  border-box !important;}

.mas-only {
 -moz-column-width: 25em;
 -webkit-column-width: 25em;
 -moz-column-gap: .5em;
 -webkit-column-gap: .5em; 
  overflow-x: hidden;
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
          transition-property:         transform, opacity;
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


</style>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://bootstraptema.ru/plugins/2017/b-waterfall/bootstrap-waterfall.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.1/masonry.pkgd.min.js" ></script>
<div class="create-post"  style="margin:0 auto;">
            <h4>Popular</h4>
              <div class="row">
                <!-- <div class="col-md-5 col-sm-5">
                  <div class="form-group">
                    <img src="http://via.placeholder.com/350x150http://placehold.it/300x300" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div> -->
                <div class="col-md-12 col-sm-9">
                  <div class="tools" >
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
                      <li><button class="btn btn-primary pull-right" style="background-color: #00d2d6"><i class="icon ion-android-restaurant"></i> Eating</button></li>
                        

                    </ul>
                    <!-- <button class="btn btn-primary pull-right">Publish</button> -->
                  </div>
                </div>
              </div>
            </div>
    <!--Header End-->

<div class="mas-only">
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x300">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x1000">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/600x900">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x300">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x1000">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/600x900">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/100x300">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
      <img class="img-responsive img-main" src="http://placehold.it/300x200">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x500">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x600">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/100x300">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
      <img class="img-responsive img-main" src="http://placehold.it/300x200">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x500">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/400x600">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/200x600">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div><div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/200x700">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/300x800">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>
    <div class="panel">
    <img class="img-responsive img-main" src="http://placehold.it/500x700">
      <h4> KJASBDKJBSADK</h4>
      <img class="img-circle" align="left" src="http://placehold.it/25x25">
      <button class="btn smll">FOLLOW</button>
      </div>

</div>
<script type="text/javascript">
  


$(window).scroll(function(){
    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
        // run our call for pagination
        // var table = document.getElementById("table");
        // var lastRowIndex = table.rows.length-1;
        
        // alert('test sukses scroll down');
        // var last_id = getlastid-- nunggu foreach
        // loadMore(lastRowIndex);
        alert('tes sukses'); //coba scrolldown        
    }
});

// function loadMore(lastRowIndex)
// {
// $.ajax({
//     url: "<?php echo  base_url() ?>Backprocess/loadmore",  //controller
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