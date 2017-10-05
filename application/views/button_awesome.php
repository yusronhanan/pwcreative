  <style type="text/css">
     body {
    padding-top: 50px;
}

.material-button-anim {
  position: relative;
  padding: 127px 15px 27px;
  text-align: center;
  max-width: 320px;
  margin: 0 auto 20px;
}

.material-button {
    position: relative;
    top: 0;
    z-index: 1;
    width: 70px;
    height: 70px;
    font-size: 1.5em;
    color: #fff;
    background: #2C98DE;
    border: none;
    border-radius: 50%;
    box-shadow: 0 3px 6px rgba(0,0,0,.275);
    outline: none;
}
.material-button-toggle {
    z-index: 3;
    width: 90px;
    height: 90px;
    margin: 0 auto;
}
.material-button-toggle span {
    -webkit-transform: none;
    transform:         none;
    -webkit-transition: -webkit-transform .175s cubic-bazier(.175,.67,.83,.67);
    transition:         transform .175s cubic-bazier(.175,.67,.83,.67);
}
.material-button-toggle.open {
    -webkit-transform: scale(1.3,1.3);
    transform:         scale(1.3,1.3);
    -webkit-animation: toggleBtnAnim .175s;
    animation:         toggleBtnAnim .175s;
}
.material-button-toggle.open span {
    -webkit-transform: rotate(45deg);
    transform:         rotate(45deg);
    -webkit-transition: -webkit-transform .175s cubic-bazier(.175,.67,.83,.67);
    transition:         transform .175s cubic-bazier(.175,.67,.83,.67);
}

#options {
  height: 70px;
}
.option {
    position: relative;
}
.option .option1,
.option .option2,
.option .option3,
.option .option4,
.option .option5 {
    filter: blur(5px);
    -webkit-filter: blur(5px);
    -webkit-transition: all .175s;
    transition:         all .175s;
}
.option .option1 {
    -webkit-transform: translate3d(90px,-90px,0) scale(.8,.8);
    transform:         translate3d(90px,-90px,0) scale(.8,.8);
}
.option .option2 {
    -webkit-transform: translate3d(0,-90px,0) scale(.8,.8);
    transform:         translate3d(0,-90px,0) scale(.8,.8);
}
.option .option3 {
    -webkit-transform: translate3d(-90px,-90px,0) scale(.8,.8);
    transform:         translate3d(-90px,-90px,0) scale(.8,.8);
}
.option .option4 {
    -webkit-transform: translate3d(40px,-140px,0) scale(.8,.8);
    transform:         translate3d(40px,-140px,0) scale(.8,.8);
}
.option .option5 {
    -webkit-transform: translate3d(-30px,-140px,0) scale(.8,.8);
    transform:         translate3d(-30px,-140px,0) scale(.8,.8);
}
.option.scale-on .option1, 
.option.scale-on .option2,
.option.scale-on .option3,
.option.scale-on .option4,
.option.scale-on .option5 {
    filter: blur(0);
    -webkit-filter: blur(0);
    -webkit-transform: none;
    transform:         none;
    -webkit-transition: all .175s;
    transition:         all .175s;
}
.option.scale-on .option1 {
    -webkit-transform: translateY(-80px) translateX(-50px);
    transform:         translateY(-80px) translateX(-50px);
    -webkit-transition: all .2s;
    transition:         all .2s;
}
.option.scale-on .option2 {
    -webkit-transform: translateY(10px) translateX(-100px);
    transform:         translateY(10px) translateX(-100px);
    -webkit-transition: all .3s;
    transition:         all .3s;
}
.option.scale-on .option3 {
    -webkit-transform: translateY(55px) translateX(-80px);
    transform:         translateY(55px) translateX(-80px);
    -webkit-transition: all .4s;
    transition:         all .4s;
}
.option.scale-on .option4 {
    -webkit-transform: translateY(-58px) translateX(145px);
    transform:         translateY(-58px) translateX(145px);
    -webkit-transition: all .5s;
    transition:         all .5s;
}
.option.scale-on .option5 {
    -webkit-transform: translateY(-150px) translateX(102px);
    transform:         translateY(-150px) translateX(102px);
    -webkit-transition: all .6s;
    transition:         all .6s;
}

@keyframes toggleBtnAnim {
    0% {
        -webkit-transform: scale(1,1);
        transform:         scale(1,1);
    }
    25% {
        -webkit-transform: scale(1.4,1.4);
        transform:         scale(1.4,1.4); 
    }
    75% {
        -webkit-transform: scale(1.2,1.2);
        transform:         scale(1.2,1.2);
    }
    100% {
        -webkit-transform: scale(1.3,1.3);
        transform:         scale(1.3,1.3);
    }
}
@-webkit-keyframes toggleBtnAnim {
    0% {
        -webkit-transform: scale(1,1);
        transform:         scale(1,1);
    }
    25% {
        -webkit-transform: scale(1.4,1.4);
        transform:         scale(1.4,1.4); 
    }
    75% {
        -webkit-transform: scale(1.2,1.2);
        transform:         scale(1.2,1.2);
    }
    100% {
        -webkit-transform: scale(1.3,1.3);
        transform:         scale(1.3,1.3);
    }
}
    </style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
  <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="material-button-anim">
            
            <button class="material-button material-button-toggle" type="button">
            <span class="fa fa-plus" aria-hidden="true"></span>
          </button>
          
          <ul class="list-inline" id="options">
              
            <li class="option">
                <a href="https://www.youtube.com/" target="_blank">
                    <button class="material-button option1" type="button">
                        <span class="fa fa-youtube fa-2x" aria-hidden="true"></span>
                    </button>
                </a> 
            </li>
            
            <li class="option">
                <a href="https://www.facebook.com/" target="_blank">
                    <button class="material-button option2" type="button">
                        <span class="fa fa-facebook-official fa-2x" aria-hidden="true"></span>
                    </button>
                </a>
            </li>
            
            <li class="option">
                <a href="chrome://newtab" target="_blank">
                    <button class="material-button option3" type="button">
                        <span class="fa fa-home fa-2x" aria-hidden="true"></span>
                    </button>
                </a>
            </li>
            
            <li class="option">
                <a href="https://outlook.office.com/owa/?realm=biglemoncreative.co.uk&exsvurl=1&ll-cc=2057&modurl=0&path=/mail/inbox" target="_blank">                
                    <button class="material-button option4" type="button">
                        <span class="fa fa-envelope fa-2x" aria-hidden="true"></span>
                    </button>
                </a>    
            </li>
            
            <li class="option">
                <a href="http://www.biglemoncreative.co.uk/" target="_blank">
                    <button class="material-button option5" type="button">
                        <span class="fa fa-lemon-o fa-2x" aria-hidden="true"></span>
                    </button>
                </a>
            </li>
            
          </ul>
        </div>
      </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    $('.material-button-toggle').click(function () {
        $(this).toggleClass('open');
        $('.option').toggleClass('scale-on');
    });
});
</script>