jQuery("#ajaxbtn").click(function(e){
var me = jQuery(this);
e.preventDefault();

const ajax_id = jQuery('#ajax-input').attr('id');



jQuery.ajax({
type:"POST",
url:myajax.ajax_url,
data:{action:'extraimg',
nonce:myajax.nonce,
id:ajax_id
},
}).done(function(response){
//load the fetched php file into the div
console.log(response);
}
)


})


