$(document).ready(function(){ 
  /* $.ajax({
			    type: "GET",
			   url: "http://bilbolive.es/Index/page",
			     data: 1,
			   success: function(data){
                   $("#target2").html(data);
               }});
			   */

$("#enviar").click(function(){ 

  
       var code= jQuery("#code").val();
	   var ide = jQuery("#ide").val();
		 
		   $.ajax({
			   data:{
			 code:code,
             ide: ide,
             },
			    type: "POST",
			    url: "http://bilbolive.es/index.php?controller=Index&task=page",
			  success: function(data){
                   $("#target").html(data);
               }});
		

		  /*  jQuery.ajax({
        type: "POST",
        url: "http://bilbolive.es/index.php?controller=Index&task=page",
        data: data,
        success: function(data){
		 
          jQuery('#target').html(jQuery(data).fadeIn('slow')); 
      
        }
    }); */
	 
		
    
	 
	
 
 
 
	 




});  
});


		 
	 
  
 