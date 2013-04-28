$(function () {   
    var lat=49.479167,
    lng=20.022819,  
    zoom=14;  
 
    function info(map){
        var info =  "PHT Leski";   
        var point = new GLatLng(lat, lng);   
        var marker = new GMarker(point);   
        map.addOverlay(marker);   
        marker.openInfoWindowHtml(info);    	
    };
 
    function load() {  
        if (GBrowserIsCompatible()) {  
            var map = new GMap2(document.getElementById("map"));  
  
            map.setCenter(new GLatLng(lat, lng), zoom);   
            map.addControl(new GLargeMapControl ());     
     
            map.addControl(new GScaleControl());     
            map.addControl(new GMapTypeControl());     
            map.setCenter(new GLatLng(lat, lng), zoom);   
  
            map.hideControls();   
            GEvent.addListener(map, "mouseover", function(){
                map.showControls();
            });   
            GEvent.addListener(map, "mouseout", function(){
                map.hideControls();
            });
            info(map);            
        }  
    };  
    load();
    
    //mail form
    $('#mail-form').dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        width : 450,
        buttons: {
            "Wyślij": function() {
                var that = this,
                $mailToken = $('#mail__token'),
                $mailName = $('#mail_name'),
                $mailAddress = $('#mail_email_address'),
                $mailMessage = $('#mail_message'),
                data = {
                    mail : {
                        name : $mailName.val(),
                        _token : $mailToken.val(),
                        email_address : $mailAddress.val(),
                        message : $mailMessage.val()   
                    }
                },
                $buttonset = $('.ui-dialog-buttonset');
                
                $.each([$mailName, $mailAddress, $mailMessage], function (index, element) {
                    element.attr('disabled', 'disabled');
                });
                $buttonset.hide();
                $.ajax({
                    url : $(this).find('form').attr('action'),
                    data : data,
                    type : 'POST',
                    dataType : 'json',
                    success : function (resposne) {
                        if (resposne.status === 'ok') {
                            $(that).html(resposne.message);
                            $buttonset.show();
                            $buttonset.find('button').hide();
                            $buttonset.find('button:eq(2)').show('OK');
                        } else {
                            $(that).html(resposne.form);
                            $buttonset.show();
                        }
                    }
                });
            },
            "Pomiń": function() {
                var $buttonset = $('.ui-dialog-buttonset');
                $(this).dialog("close");

            },
            "OK" : function() {
                $(this).dialog("close");                
            }
        }
    });
    $('a.jqsMail').click(function (event) {
        var mailboxId;
        event.preventDefault();
        event.stopPropagation();
        
        mailboxId = $(this).attr('ref');
        $.ajax({
            url: 'send-message/' +mailboxId,
            dataType: 'html',
            success: function(html) {
                $('#mail-form').html(html);
                $buttonset = $('.ui-dialog-buttonset');
                $buttonset.show();
                $buttonset.find('button').show();
                $buttonset.find('button:eq(2)').hide();
                $('#mail-form').dialog('open');
            },
            error: function (qXHR, textStatus, errorThrown){
                alert('Funkcja chwilowo niedostępna - przepraszamy');
            }
        });
    });
});