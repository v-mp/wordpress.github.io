		$(document).ready(function(){
      ///////////////////////////  //FOR PC AND FOR MOBILE
      var screenW = $(window).width();
      var screenH = $(window).height();
      if (screenW < 1200) {
        $('#globaltime').hide();
        $('div.navbar-header').append("<p class='pull-right' id='globaltime'></p>");
      }else{
        $('#toggle').css('display','block');
      }
      ////////////////////////////  // CLICK NAVBAR TOGGLE FOR MOBILE
      $('.navbar-toggle').click(function(){
        var display = $('#toggle').css('display');
        if(display == 'none'){
          $('#toggle').css('display','block');
        }else{
         $('#toggle').css('display','none');
        }
        return false;
      });


      //////////////////////////  // ONLOAD CONTENT
      // $('.navbar-nav li a').click(function(){
      //   var url = $(this).attr('href');
      //   $('body').load(url);
      //   return false;
      //   });

      //   var title = $('body'+' title').html();
      //   $('title').replaceWith('<title>'+title+'</title>');
      //   if(title === undefined){
      //     $('title').replaceWith('<title>PolitNews</title>');
      //   }
      //   /////////////////////// // NAVBAR-NAV LI A:ACTIVE ONLOAD
      //   switch (title){
      //   case 'PolitNews':$('.navbar-nav>li:nth-child(1)>a').addClass('active');
      //   break;
      //   case 'Видео':$('.navbar-nav>li:nth-child(2)>a').addClass('active');
      //   break;
      //   case 'Статистика':$('.navbar-nav>li:nth-child(3)>a').addClass('active');
      //   break;
      // };

			///////////////////  // UL LI A:HOVER
			$('ul li a').hover(function(){
				$(this).addClass('hover')
			});
			$('ul li a').mouseout(function(){
				$(this).removeClass('hover')
			});


     ///////////////////// // UL LI A:ACTIVE
      
      $('ul li a').focus(function(){
        $(this).addClass('focus');
      
      });
      $('ul li a').blur(function(){
        $(this).removeClass('focus');
      });

       /////////////////////// // GLOBALTIME
      setInterval(function() {
        $("#globaltime").html(formatDate(new Date()));
      }, 1000);
      function formatDate(date) {
        var hour = "0" + date.getHours(),
            minute = "0" + date.getMinutes(),
            second = "0" + date.getSeconds();
        return [hour.slice(-2), minute.slice(-2), second.slice(-2)].join(":");
      };
     /////////////CHANGE 30%;
     var s_win_w = $(window).width();
      $(window).resize(function(){
       win_w = $(window).width();
     if (win_w >= s_win_w*1.3 || win_w <= s_win_w*0.7) {
      location.reload();
     }
    });
     // NAV-LIST LI A:ACTIVE 
     $('.nav-list li a').click(function(){
      $('#news-block .row-fluid').show();
      var id = $(this).attr('href');
      switch (id){
      case '#old':$('#newNews').hide(),$('#popular').hide();
      break;
      case '#newNews':$('#old').hide(),$('#popular').hide();
      break;
      case '#popular':$('#old').hide(),$('#newNews').hide();
      break;
    };
      return false;
    });

    $('.logo').css('width','0px').animate({width: "130px"}, 1500);       
    
});