var Laika = {
        CallAjax: function(url, data, callback){
            var timer, tmp;
             $.ajax({
                    type: 'POST',
                    // async: false,
                    url: url,
                    data: data,
                    dataType:'json',
                    beforeSend: function(){
                        timer && clearTimeout(timer);
                        timer = setTimeout(function()
                        {
                            $("body").addClass("loading"); 
                        },
                        500);                  
                        
                    },
                    complete: function(){
                        clearTimeout(timer);
                        $("body").removeClass("loading"); 
                    },                     
                    success: function(evt){ 
                    	tmp = evt;
                        
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        alert('error: ' + textStatus + ': ' + errorThrown);
                    }
            }); 
            return tmp;
        },
        ExportToCSV: function(JSONData, ReportTitle, ShowLabel, ReportName){

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
            var csvUrl = window.URL.createObjectURL(blob);
            var filename = ReportName+" "+$date_time + ".csv";
            $("#lnkDwnldLnk")
            .attr({
                'download': filename,
                'href': csvUrl
            }); 

            $('#lnkDwnldLnk')[0].click();    
            document.body.removeChild(link);    


        },     
        UpdateField: function(obj, rowid, colval, url, updatetype, inputtype){
        		var $this       = obj, 
                    rowid       = rowid || '',
                    colval      = colval || '',
                    url         = url || '',
                    updatetype  = updatetype || '',
                    inputtype   = inputtype || '';


                var $input = $('<input>', {
                    value: $this.text(),
                    type: inputtype,
                    class: 'form-control input-xs',
                    blur: function() {
                       var $text = this.value;     
                       if(inputtype == 'password') 
                            $this.text($text.replace(/[^\s]/g, "*"));
                       else 
                            $this.text($text);

                        var $data = {
                                'colid'         : rowid,
                                'field_type'    : updatetype,
                                'colval'        : this.value,
                        }

                       
                        if( this.value == ''){$this.text( colval );}
                        if( this.value != '')
                             LaikaPrototype.CallAjax(url, $data);
                    },
                    keyup: function(e) {
                       if (e.which === 13) $input.blur();
                    }
                }).appendTo( $this.empty() ).focus();   
                return $input;      	
        },
        HighlightRow: function(){
            $('.highlight', $(this).parent()).removeClass("highlight");
            $(this).addClass("highlight");
        },

}





