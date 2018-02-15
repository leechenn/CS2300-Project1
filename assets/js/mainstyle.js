
          $(function(){
              $(window).scroll(function(){
                  if( $("body").scrollTop() > 0){
                  $(".navbar").css("opacity" , "0.8");
                  }
                  else{
                        $(".navbar").css("opacity" , "1");
                  }
              });
            
              var icon = document.getElementById('icon');
              var open = false;
              $("#foot a").hover( function(){
                 var id=$(this).attr("id");
                  $(this).addClass(id);
              },
                      function(){
                  var id=$(this).attr("id");
                  $(this).removeClass(id);
              }
                                );
                 $("#resumeBtn").click(function(){
                 $("#navbarSupportedContent li" ).eq(1).fadeToggle(500);
                  if(open){
                      icon.className = 'fa fa-arrow-down';  
                    } else{
                      icon.className = 'fa fa-arrow-down open';
                    }

                    open = !open;
                 $(".wrapper").slideToggle("slow");
  });
              $("#box div").hover(function(){
                 $("#box div").stop();
                  $(this).animate({"width" : "60%"},1000).siblings("div").animate({"width" : "10%"},1000);
            }, function(){
                      
            }
                                
            );

});
              
         
      