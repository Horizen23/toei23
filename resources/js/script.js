$(document).ready(function () {
    $("#bttc").click(function () {
      var aa = $("#eee").attr('class');
      var widthe = $(".seache").css("width");
  
      if (aa == "seach seache" || aa == "seache") {
        $("#eee").removeClass("seach seache");
        $("#eee").addClass("seachen");
        $("#eee").css("width", widthe);
      } else {
        $("#eee").removeClass("seachen");
        $("#eee").addClass("seache");
      }
  
      ;
    });
  
  
    $(".Notif").click(function () {
      $(".NOTIFICATIONnone").toggleClass("NOTIFICATION");
    });
  
  
    $('.navlist>a').click(function (e) {
      e.preventDefault();
      $('a').removeClass('On_page');
      $(this).addClass('On_page');
      var aa = $(this).offset();
      e.preventDefault();
      $('a').removeClass('On_page');
      $(this).addClass('On_page');
      $(".dotee").animate({
        top: aa.top + "px"
      }, 1000);
    });
  
  
    $("a.hva").click(function () {
      var cn = $(this).attr('id');
      $.cookie('manu', cn);
      console.log($.cookie("manu"))
      $.ajaxSetup({
        url: cn,
        headers: {
          'path': "cn"
        },
        success: function success(result) {
          $(".cbody").html(result);
        }
      });
      $.ajax();
    });
  
    // var e64 = window.btoa('name');
    // var d64 = window.atob(e64);
    
    var ick = $.cookie("manu");
    if(ick){
      console.log('มี')
      if(ick=="Dashboard"||ick=="user_information"||ick=="Employee_information"||ick=="intent_Linebot"||ick=="Message_Linebot"||ick=="Product_car"||ick=="Stock") {
        var ae = $.cookie("manu")
        var aa = $('.'+ae).offset();
        $('a').removeClass('On_page');
        $('.'+ae).addClass('On_page');
        $('a').removeClass('On_page');
        $('.'+ae).addClass('On_page');
        console.log(aa.top)
        $(".dotee").css('top',aa.top + "px")
        $.ajaxSetup({
          url: ick,
          headers: {
            'path': "cn"
          },
          success: function success(result) {
            $(".cbody").html(result);
          }
        });
        $.ajax();
      }
    
    }
    else{
      console.log('ไม่มี')
      $.ajaxSetup({
        url: "Dashboard",
        headers: {
          'path': "cn"
        },
        success: function success(result) {
          $(".cbody").html(result);
        }
      });
      $.ajax();
      
    }
  });
  $(document).keydown(function (e) {
    if (event.ctrlKey && e.keyCode == 70) {
      e.preventDefault();
      var aa = $("#eee").attr('class');
      var widthe = $(".seache").css("width");
  
      if (aa == "seach seache" || aa == "seache") {
        $("#eee").removeClass("seach seache");
        $("#eee").addClass("seachen");
        $("#eee").css("width", widthe);
        $('input.seach').blur();
      } else {
        $("#eee").removeClass("seachen");
        $("#eee").addClass("seache");
        $('input.seach').focus();
      }
  
      ;
    }
  
    if (event.ctrlKey && e.keyCode == 16) {
      e.preventDefault();
      $('.popup').show();
      $('input.subbeeiei').focus();
      $('.Header').addClass('noClick');
    }
  });
  