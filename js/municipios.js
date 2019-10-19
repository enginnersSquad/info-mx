function getMuni(){
	var id_m = $("#id_omuni").val();
  $.ajax({
			type:"POST",
			url:"model/getPresupuesto.php",
			data:"id_objeto=" + id_o,
			success:function(r){
				$('#tabla').html(r);
			}
		});
}
