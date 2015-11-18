

$("#distrito").change (function (event){
	
	$get("bairros/"+event.target.value+ "",
	function (response,distrito){
		
		$("#bairro").empty();
		for (i=0; i<response.length; i++){
			
			$("#bairro").append ("<option value ='"+response[i].id+"">"+response[i].bairro+"</option>);
		}
	})
	
})