$(document).ready(function(){
     $('#submit').click(function(){
          var usuario = $('#usuario').val();
          if(usuario == '')
          {
            $('#error_message').html("");
          }
          else
          {
            $('#error_message').html('');
            $.ajax({
              url:"checkeliminusu.php",
              method:"POST",
              data:{usuario:usuario},
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
