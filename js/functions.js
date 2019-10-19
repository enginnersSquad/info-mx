function graficas(){
  $.ajax({
      type:"POST",
      url:"192.168.43.90:8080/inai",
      data:"id_objeto=" + 0,
      success:function(r){
          $('#tabla').html(r);
      }
    });
}
