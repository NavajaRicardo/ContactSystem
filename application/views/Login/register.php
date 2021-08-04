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
    
    <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Name</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" id="btn-reg" style="margin-bottom: 20px;margin-top: 20px;" type="button">Register</button>
      </div>
    </div>
  </fieldset>
</form>

  </div>
</div>
<script>
$(document).ready(function(){
    var isShiftPressed = false; //for capslock detection
    var isCapsOn = null; //for capslock detection
    var Registration = {
        Init: function(config){
            this.config = config;
            this.BindEvents();
        },
        BindEvents: function(){
            var $this = this.config;  
                $this.btn_reg.on('click', {param:1}, this.SaveRegistration);


        },
        SaveRegistration: function(e ,data ) {
          var $self = Registration.config,
                $route  = (typeof(e) == 'object') ? e.data.param : e;

                switch($route) {
                  case 1:
                    
                    if ( $.trim($self.username.val() ) == "" ) {
                      Registration.IziToast(4, 'Username is required.');
                      $self.username.focus();
                      return false;
                    }
                    if ( $.trim($self.email.val() ) == "" ) {
                      Registration.IziToast(4, 'Email is required.');
                      $self.email.focus();
                      return false;
                    }
                    if ( $.trim($self.password.val() ) == "" ) {
                      Registration.IziToast(4, 'Password is required.');
                      $self.password.focus();
                      return false;
                    }
                    if ( $.trim($self.password_confirm.val() ) == "" ) {
                      Registration.IziToast(4, 'Confirm Password is required.');
                      $self.password_confirm.focus();
                      return false;
                    }

                    if ( $.trim($self.password.val() ) != $.trim($self.password_confirm.val() ) ) {
                      Registration.IziToast(4, 'Password Mismatch.');
                      return false;
                    }


                    var $data = {
                      ProfileID    : 0,
                      ProfileName  : $.trim($self.username.val() ),
                      EmailAdd     : $.trim($self.email.val() ),
                      ProfilePassword : $.trim($self.password.val() )
                    };

                    Registration.CallAjax('<?=base_url()?>index.php/Login/registeration', $data);
                    break;
                  

                }
        },
        IziToast: function(e , message) {
            var $self = Registration.config;
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
                        // window.location = '<?=base_url()?>'+evt[0].ModuleController+'/'+evt[0].SystemID;
                    }
                    else{
                      Registration.IziToast(4,evt[0].Result);
                        // Login.IziToast(4, 'Invalid username or password');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                      console.log('error: ' + textStatus + ': ' + errorThrown);
                }
            });
        }
    }

    Registration.Init({
      username  : $("#username"),
      email : $('#email'),
      password : $("#password"),
      password_confirm : $("#password_confirm"),
      btn_reg : $("#btn-reg")
    });

});
</script>
