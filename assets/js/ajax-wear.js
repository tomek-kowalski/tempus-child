jQuery("#ajaxbtn").click(function () {
   jQuery.ajax({
     type : 'post',
     dataType : 'json',
     url : myajax.ajax_url,
     data : {action: 'tablo'},
     success: function(response) {
       //load the fetched php file into the div
       jQuery('#ajax').html(response.content);
       console.log("fuk");
     }
   });
 });

