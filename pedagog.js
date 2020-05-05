//foto profili
$(document).ready(function(){
    $("#profil").click(function(){
      $(this).animate({
      
        height: '+=60px',
        width: '+=60px',
        color: 'red'
      },"slow");
     
    });
    $("#profil").mouseleave(function(){
      $(this).animate({
      
        height: '250px',
        width: '250px',
        backgroundColor: 'gray'
      },"slow");
     
    });
  });
//lendet dhe info te tj
$(document).ready(function(){
    $("#lenda").click(function(){
      $("#lendet").animate({
        height: 'toggle'
      });
    });
  });


  //grada
  $(document).ready(function(){
    $("#grada").mouseenter(function(){
      $("#grada1").animate({
        fontSize: '+=3px'
      },"slow");
    
    });
    $("#grada").mouseleave(function(){
      $("#grada1").animate({
        fontSize: '-=3px'
      },"slow");
    
    });
  });
  //website
  $(document).ready(function(){
    $("#web").mouseenter(function(){
      $("#web1").animate({
        fontSize: '+=3px'
      },"slow");
    
    });
    $("#web").mouseleave(function(){
      $("#web1").animate({
        fontSize: '-=3px'
      },"slow");
    
    });
  });
  //adresa
  $(document).ready(function(){
    $("#adr").mouseenter(function(){
      $("#adr1").animate({
        fontSize: '+=3px'
      },"slow");
    
    });
    $("#adr").mouseleave(function(){
      $("#adr1").animate({
        fontSize: '-=3px'
      },"slow");
    
    });
  });
  //email
  $(document).ready(function(){
    $("#em").mouseenter(function(){
      $("#em1").animate({
        fontSize: '+=1px'
      },"slow");
    
    });
    $("#em").mouseleave(function(){
      $("#em1").animate({
        fontSize: '-=1px'
      },"slow");
    
    });
  });
  //tel
  $(document).ready(function(){
    $("#tel").mouseenter(function(){
      $("#tel1").animate({
        fontSize: '+=3px'
      },"slow");
    
    });
    $("#tel").mouseleave(function(){
      $("#tel1").animate({
        fontSize: '-=3px'
      },"slow");
    
    });
  });

 //botime
 $(document).ready(function(){
  $("#prj").mouseenter(function(){
    $("#konf").css("opacity","0.5");
    $("#shkenc").css("opacity","0.5");
  });
  $("#prj").mouseleave(function(){
    $("#konf").css("opacity","1");
    $("#shkenc").css("opacity","1");
  });
  $("#konf").mouseenter(function(){
    $("#prj").css("opacity","0.7");
    $("#shkenc").css("opacity","0.7");
  });
  $("#konf").mouseleave(function(){
    $("#prj").css("opacity","1");
    $("#shkenc").css("opacity","1");
  });
  $("#shkenc").mouseenter(function(){
    $("#konf").css("opacity","0.7");
    $("#prj").css("opacity","0.7");
   
  });
  $("#shkenc").mouseleave(function(){
    $("#konf").css("opacity","1");
    $("#prj").css("opacity","1");
  });
});
  
//programet
$(document).ready(function(){
  $("#bach").click(function(){
    $("#mastel").slideUp("slow");
    $("#bachel").toggle("slow");
  });
});
$(document).ready(function(){
  $("#mast").click(function(){
    $("#bachel").slideUp("slow");
    $("#mastel").toggle("slow");
  });
});
//..d-sm-table-row
$(document).ready(function(){
  $(".prog").click(function(){
    $("#mastel").slideDown("slow");
    $("#bachel").slideDown("slow");
  });
});