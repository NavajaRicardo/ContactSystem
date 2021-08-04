<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Poppins');
html {
  background-color: #56baed;
}
body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}
.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    background: #dedfe0;
}
a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}
h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px;
  color: #cccccc;
}
.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}
#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}
#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}
h2.inactive {
  color: #cccccc;
}
h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}
input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}
input[type=text],input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=text]:focus,input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}
input[type=text]:placeholder,input[type=password]:placeholder {
  color: #cccccc;
}
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}
.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}
.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}
.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}
.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}
.underlineHover:hover {
  color: #0d0d0d;
}
.underlineHover:hover:after{
  width: 100%;
}
*:focus {
    outline: none;
}
#icon {
  width:45%;
}
* {
  box-sizing: border-box;
}
#error
  {
      border: 1px solid #FFFF66;
      background-color: #FFFFCC;
      display: inline-block;
      margin-left: 20px;
      margin-right: 20px;
      padding: 3px;
      display: none;
  }
.login-logo { margin-bottom: 10px;}
</style>

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- <h2 class="active"></h2> -->
    <div class="fadeIn first" style="margin-top:30px;">
        <img src="<?=base_url()?>assets/img/logo/onesmartapp.png" class="login-logo" id="icon" alt="User Icon" />
    </div>
    <form>
        <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"><div id="error">Caps Lock is ON.</div>
        <input type="button" class="fadeIn fourth" value="Log In" id="login-submit" style="margin-bottom: 10px;">
        </br>
        <a href="<?=base_url()?>index.php/Login/register" style="margin-bottom: 30px;color: #337ab7 !important; font-size: 22px;">REGISTER</a>
    </form>


  </div>
</div>
<script>
$(document).ready(function(){
    var isShiftPressed = false; //for capslock detection
    var isCapsOn = null; //for capslock detection
    var Login = {
        Init: function(config){
            this.config = config;
            this.BindEvents();
        },
        BindEvents: function(){
            var $this = this.config;

            $this.button_login.on('click', {param: 1},this.Verify);
            $this.user_name.on('keypress', {param: 2}, this.Verify);
            $this.user_password.on('keypress', {param: 2}, this.Verify);

            //detect capslock
            $this.user_password.bind('keydown',{param : 1},this.Capslock);
            $this.user_password.bind('keyup',{param : 2},this.Capslock);
            $this.user_password.bind('keypress',{param : 3},this.Capslock);
        },
        Capslock : function(e){ //capslock detection
            var $self  = Login.config,
                $route = (typeof(e) == 'object') ? e.data.param : e;

              switch($route){
                case 1:
                    var keyCode = e.keyCode ? e.keyCode : e.which;
                    if (keyCode == 16) {
                        isShiftPressed = true;
                    }
                break;
                case 2:
                    var keyCode = e.keyCode ? e.keyCode : e.which;
                    if (keyCode == 16) {
                        isShiftPressed = false;
                    }
                    if (keyCode == 20) {
                        if (isCapsOn == true) {
                            isCapsOn = false;
                            $self.error.hide();
                        } else if (isCapsOn == false) {
                            isCapsOn = true;
                            $self.error.show();
                        }
                    }
                break;
                case 3:
                    var keyCode = e.keyCode ? e.keyCode : e.which;
                    if (keyCode >= 65 && keyCode <= 90 && !isShiftPressed) {
                        isCapsOn = true;
                        $self.error.show();
                    } else {
                        $self.error.hide();
                    }
                break;
              }
        },
        Verify: function(e){
            var $self = Login.config,
                $route  = (typeof(e) == 'object') ? e.data.param : e;

                switch($route){
                  case 1:
                      
                      if ( $.trim($self.user_name.val()) == "" ) {
                        Login.IziToast(4, 'Username is required.');
                        $self.user_name.focus();
                        return false;
                                     
                        }
                        if ( $.trim($self.user_password.val()) == "" ) {
                        Login.IziToast(4, 'Password is required.');
                        $self.user_password.focus();
                        return false;
                                     
                        }

                        var $data = {
                          EmailAdd : $.trim($self.user_name.val()),
                          ProfilePassword : $.trim($self.user_password.val())
                        }
                        
                        Login.CallAjax('<?=base_url()?>index.php/Login/verify', $data);
                break;
                case 2:
                    if(e.keyCode == '13' ) {
                        e.preventDefault();
                        $self.button_login.click();
                    }
                break;
            }
        },
        IziToast: function(e , message) {
            var $self = Login.config;
                $tmp  = (typeof(e) == 'object' ) ? e.data.param : e ;

                switch($tmp) {
                    case 1: //Success
                        iziToast.success({
                            title    : 'Success',
                            message  : message,
                            position : 'topRight',
                            icon     : 'fa fa-thumbs-up'
                        });
                    break;
                    case 2: //Error
                        iziToast.error({
                            title    : 'Error',
                            message  : message,
                            position : 'topRight',
                            icon     : 'fa fa-exclamation'
                        });
                    break;
                    case 3: //Info
                        iziToast.info({
                            title    : 'Info',
                            message  : message,
                            position : 'topRight',
                            icon     : 'fa fa-info'
                        });
                    break;
                    case 4: //Warning
                        iziToast.warning({
                            title    : 'Warning',
                            message  :  message,
                            position : 'topRight',
                            icon     : 'fa fa-exclamation-triangle'
                        });
                    break;
                }
        },
        CallAjax: function(url, data){
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                dataType:'json',
                success: function(evt){
                    if(evt[0].IsSuccess === '1'){
                        // window.location = '<?=base_url()?>DZI_System/sid/5';
                        window.location = '<?=base_url()?>index.php/ContactForm';
                    }
                    else{
                        Login.IziToast(4,evt[0].Result);
                        // Login.IziToast(4, 'Invalid username or password');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                      console.log('error: ' + textStatus + ': ' + errorThrown);
                }
            });
        }
    }

    Login.Init({
        button_login  : $('#login-submit'),
        user_name     : $('#username'),
        user_password : $('#password'),
        error         : $('#error'),
    });

});
</script>
