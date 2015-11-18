

$("#registro").click(function(){
	var dato = $("#distrito").val();
	var route = "http://localhost:8000/distrito";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{distrito: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.distrito);
			$("#msj-error").fadeIn();
		}
	});
});
