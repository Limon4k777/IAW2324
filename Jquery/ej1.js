$(document).ready(function() {
    
    $("#esconder").click(function(){
        $("p").hide();
    });

    $("#mostrar").click(function(){
        $("p").show();
    });

    $("#borrar").click(function() {
        let bruh = prompt('Cual Borrar');

        if (bruh == "todos"){

            $("#1").animate(
                { deg: Math.random()*1000000000000 },
                {
                  duration: 1000,
                  step: function(now) {
                    $(this).css({ transform: 'rotate(' + now + 'deg)' });
                  }
                }
              );
              $("#2").animate(
                { deg: Math.random()*1000000000000 },
                {
                  duration: 1000,
                  step: function(now) {
                    $(this).css({ transform: 'rotate(' + now + 'deg)' });
                  }
                }
              );
              $("#3").animate(
                { deg: Math.random()*1000000000000 },
                {
                  duration: 1000,
                  step: function(now) {
                    $(this).css({ transform: 'rotate(' + now + 'deg)' });
                  }
                }
              );
        }

        else {

        $("#"+bruh).animate(
            { deg: Math.random()*1000000000000 },
            {
              duration: 1000,
              step: function(now) {
                $(this).css({ transform: 'rotate(' + now + 'deg)' });
              }
            }
          );}
        });
});