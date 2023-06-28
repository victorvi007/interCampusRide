$(document).ready(function(){

    $('#mobile-menu').hide();
    $('#close').hide();

    
      $('#show').click(()=>{
        $('#mobile-menu').show();
        $('#close').show();

        $('#show').hide();
      })

      $('#close').click(()=>{
        $('#mobile-menu').hide();
        $('#close').hide();;

        $('#show').show();
      })
  });



