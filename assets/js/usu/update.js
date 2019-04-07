$(document).ready(function(){
     $('#submit').click(function(){
          var usuario = $('#usuario').val();
          var contra = $('#contra').val();
          var tipo = $('#tipo').val();
          if(usuario == '' || contra == '')
          {
               $('#error_message').html("");
          }
          else
          {
               $('#error_message').html('');
               $.ajax({
                    url:"checkmodifusu.php",
                    method:"POST",
                    data:{usuario:usuario, contra:contra, tipo:tipo},
                    success:function(data){
                         $("form").trigger("reset");
                         $('#success_message').fadeIn().html(data);
                         setTimeout(function(){
                              $('#success_message').fadeOut("Slow");
                         }, 2000);
                    }
               });
          }
     });
});
