$(document).ready(function(){ 

	$("#enviar").click(function(){ 
		var unindexed_array =  $("#platos").serializeArray();
		var indexed_array = {};
		$.map(unindexed_array, function(n, i){
			indexed_array[n['name']] = n['value'];
		});
		console.log(indexed_array);


		$.ajax({
			data: indexed_array,
			type: "POST",
			url: "http://bilbolive.es/index.php?controller=Index&task=page",
			success: function(data){
				$("#target").html(data);
			}});
		
    });
});


		 
	 
  
 