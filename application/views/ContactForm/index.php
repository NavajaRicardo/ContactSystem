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
    
    <form class="form-horizontal" action=''  style="padding: 50px;">
    <div class="row">
    <div class="col-md-12">
    <div class="pull-right">
      <a href="<?=base_url()?>index.php/ContactForm/addcontact">Add Contact</a> | Contacts | <a href="<?=base_url()?>index.php/Login/logout">Logout</a>
      
    <div class="input-group">
                                                    <input type="text" class="form-control" id="in-search-contact" placeholder="Search for..." >
                                                    <span class="input-group-btn">
	                                                    <button class="btn btn-default" id="btn-select-contact" type="button" title="Select Customer">
	                                                    	<span class="fa fa-users"></span> Search
	                                                    </button>
                                                    </span>
                                                </div>
</div>
</div>
</div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col" class="text-center">NAME</th>
          <th scope="col" class="text-center">COMPANY</th>
          <th scope="col" class="text-center">PHONE</th>
          <th scope="col" class="text-center">EMAIL</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody id="tbody-contact">

      </tbody>
    </table>
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
                $this.btn_select_contact.on('click', {param:1}, this.GetContacts);
                $this.tbody_contact.on('click', '.btn-delete', {param:1}, this.RemoveContact);
                Registration.GetContacts(1, null);

        },
        RemoveContact: function(e, data) {
          var $self = Registration.config,
                $route  = (typeof(e) == 'object') ? e.data.param : e;

                switch($route){
                  case 1:
                    var $data = {
                      ContactID    : $(this).closest('tr').attr('data-id'),
                      ContactName  : '',
                      Company     : '',
                      PhoneNo : '',
                      EmailAdd : '',
                      StatusID : 0
                    };

                    iziToast.show({
										    theme: 'dark',
										    icon: 'icon-person',
										    title: 'System Message',
										    message: `Are your sure you want to remove this contact?`,
										    position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
										    progressBarColor: 'rgb(0, 255, 184)',
											zindex: 1051,//
			                                timeout: 20000,//
			                                close: false,//
			                                overlay: true,//
			                                drag: false, //
			                                displayMode: 'once', // once, replace
										    buttons: [
										        ['<button>YES</button>', function (instance, toast) {
                              Registration.CallAjax('<?=base_url()?>index.php/ContactForm/savecontact', $data, 2);

										           	iziToast.destroy();
										        }, true], // true to focus
										        ['<button>NO</button>', function (instance, toast) {
										            instance.hide({
										                transitionOut: 'fadeOutUp',
										                onClosing: function(instance, toast, closedBy){

										                

										                    console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
										                }
										            }, toast, 'buttonName');
										        }]
										    ],
										    onOpening: function(instance, toast){
										        console.info('callback abriu!');
										    },
										    onClosing: function(instance, toast, closedBy){
										        $this.text( parseInt($this.closest('tr').find('td').eq(4).attr('data-val')) );
										    }
										});	

                    
                    break;
                  case 2:
                    if ( data[0]['IsSuccess'] == "1" ) {
                        Registration.IziToast(1, 'Contact successfully removed.');
                        $self.tbody_contact.find('#row_'+data[0]['ContactID']).remove();
                    }
                    break;
                }
        },
        GetContacts: function(e ,data ) {
          var $self = Registration.config,
                $route  = (typeof(e) == 'object') ? e.data.param : e;

                switch($route) {
                  case 1:
                    
                    


                    var $data = {
                      ContactID    : 'NULL',
                      ContactName  : $self.in_search_contact.val(),
                      Company     : '',
                      PhoneNo : '',
                      EmailAdd : '',
                      StatusID : 1
                    };

                    Registration.CallAjax('<?=base_url()?>index.php/ContactForm/getcontact', $data, 1);
                   
                    break;
                  case 2:
                    $self.tbody_contact.empty();
                    var $row ="";

                    if ( data.length > 0 ) {
                      for(var i=0;i<data.length;i++){
                        $row += `
                                <tr id="row_${data[i]['id']}" data-id="${data[i]['id']}">
                                  <td class="col">${data[i]['name']}</td>
                                  <td class="col">${ (data[i]['company'] == "" ) ? 'N/A': data[i]['company']}</td>
                                  <td class="col">${ ( data[i]['phone'] == "" ) ? 'N/A' : data[i]['phone']}</td>
                                  <td class="col">${ ( data[i]['email'] == "" ) ? 'N/A' : data[i]['email']}</td>
                                  <td class="col"><a href="<?=base_url()?>index.php/ContactForm/editcontact?id=${data[i]['id']}">EDIT</a> | <a href="#" class="btn-delete"> DELETE</a></td>
                                </tr>
                                `
                      }

                    }

                    $self.tbody_contact.append($row);
                    
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
        CallAjax: function(url, data, type){
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                dataType:'json',
                success: function(evt){
                    if ( evt) {
                      switch(type){
                        case 1: Registration.GetContacts(2, evt); break;
                        case 2: Registration.RemoveContact(2, evt); break;
                      }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                      console.log('error: ' + textStatus + ': ' + errorThrown);
                }
            });
        }
    }

    Registration.Init({
      btn_select_contact : $("#btn-select-contact"),
      in_search_contact : $("#in-search-contact"),
      tbody_contact     : $("#tbody-contact")
    });

});
</script>
