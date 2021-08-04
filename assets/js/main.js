$(document).ready(function() {
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

/* check mouse activity start*/
    idleTimer = null;
    idleState = false;
    // idleWait = 60000; //1 min
    idleWait = 600000; //15 mins

    (function ($) {

        $(document).ready(function () {
        
            $('*').bind('mousemove keydown scroll', function () {
            
                clearTimeout(idleTimer);
                        
                if (idleState == true) { 
                    
                    // Reactivated event
                    // $("body").append("<p>Welcome Back.</p>");            
                }
                
                idleState = false;
                
                idleTimer = setTimeout(function () { 
                              // Idle Event
                              window.location.replace($base_url + "Login/logout");
                              idleState = true; }, 
                              idleWait
                            );
            });
            
            $("body").trigger("mousemove");
        
        });
    }) (jQuery)
/* check mouse activity end*/

function ExportToCSVw(JSONData, ReportTitle, ShowLabel, ReportName){

    var dNow = new Date();
    var utcdate= (dNow.getMonth()+ 1) + '-' + dNow.getDate() + '-' + dNow.getFullYear();    

    var time = new Date();
    time = time.toLocaleString('en-US', { hour: 'numeric',minute:'numeric', hour12: true });
    $date_time = utcdate+'_'+time;

    var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;
    var CSV = '';    
    //This condition will generate the Label/Header
    if (ShowLabel) {
        var row = "";
        
        //This loop will extract the label from 1st index of on array
        for (var index in arrData[0]) {
            //Now convert each value to string and comma-seprated
            row += index + ',';
        }
        row = row.slice(0, -1);
        //append Label row with line break
        CSV += row + '\r\n';
    }
    
    //1st loop is to extract each row
    for (var i = 0; i < arrData.length; i++) {
        var row = "";
        //2nd loop will extract each column and convert it in string comma-seprated
        for (var index in arrData[i]) {
            row += '"' + arrData[i][index] + '",';
        }
        row.slice(0, row.length - 1);
        //add a line break after each row
        CSV += row + '\r\n';
    }

    if (CSV == '') {        
        alert("Invalid data");
        return;
    }   
    
    //this trick will generate a temp "a" tag
    var link = document.createElement("a");    
    link.id="lnkDwnldLnk";
    
    //this part will append the anchor tag and remove it after automatic click
    document.body.appendChild(link);
   
    var csv = CSV;  
    blob = new Blob([csv], { type: 'text/csv' }); 
    var csvUrl = window.webkitURL.createObjectURL(blob);
    var filename = ReportName+" "+$date_time + ".csv";
    $("#lnkDwnldLnk")
    .attr({
        'download': filename,
        'href': csvUrl
    }); 

    $('#lnkDwnldLnk')[0].click();    
    document.body.removeChild(link);    


}; 


}); //end document ready

