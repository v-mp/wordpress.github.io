<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ru-PolitNews</title>
  <meta name="theme-color" content="#FFD400">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/logo.png" type="image/x-icon">
    <?php wp_head(); ?>
    <!--  ini_set( 'display_errors', '0' ); -->
</head>
<body>
  <div id="content">
    <!-- ----------------------------------------------HEADER------------------------------------  -->
  <div class="header">
	<div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
        	<div class="navbar-header">
          <div class="logo">
          <a href="politnews.html">
          <img src="<?php bloginfo('template_url');?>/img/logo.png" />
          <div class="brand">
          <p>Russian</p><p>Political</p><p>News</p>
          </div></a>
        </div>
         <button class="navbar-toggle pull-right">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

         </div> 
          <div class="navbar-collapse" style="display: none;" id="toggle">
            <ul class="nav navbar-nav">
          	   <li><a href="index.html">Новости</a></li>
          	   <li><a href="video.html">Видео</a></li>
               <li><a href="statistics.html">Статистика</a></li>
            </ul>
            <p style="margin-top:15px" class="pull-right" id='globaltime'></p>
          </div>
      </div>
	</div>
  </div>
<!-- ------------------------------------------NEWS-BLOCK-------------------------------------------- -->
<div class="row-fluid" id="news">
  <div class="search col-lg-3">
         <input type="text" style="border-radius: 1px;" class="form-control" placeholder="Поиск новостей" />
       </div>
		 <div class="col-lg-3" id="news-menu">
		 	         <ul class="nav nav-list">
  						<li class="nav-header">Категории</li>
              <li><a href="#all">Все</a></li>
  						<li><a href="#newNews">Новые</a></li>
  						<li><a href="#old">Старые</a></li>
  						<li><a href="#popular">Важные</a></li>
  					</ul>
         </div>

      <div class="col-lg-9" id="news-block">
       <?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>
       <div class="row-fluid">
          <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a><p><small><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' назад';?></small></p></h1>
        <div class="container-fluid">
            <div id="text-news-block" class="col-lg-6">
              <?php the_content(); ?>
           </div>
          <div class="col-lg-6" id="img-news"><?php the_post_thumbnail() ?></div>
       </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
</div>
   <!--  ----------------------------------------------FOOTER----------------------------------------------- -->
  <div class="row-fluid navbar-bottom ">
    <div class="col-lg-12 footer">
      <p>Создано<a href="https://vk.com/blackpinklady" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/vk.png" alt="vk.com"/></a>
      с помощью материалов на <a href="https://ru.wikipedia.org/" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/wiki.png" alt="wikipedia.org"/></a>
      <a href="https://youtube.com" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/youtube.png" alt="youtube.com"/></a>
      <a href="https://vk.com/polit_yumor" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/vk.png" alt="vk.com"/></a>
      <a href="https://vk.com/ruopp" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/vk.png" alt="vk.com"/></a>
      <a href="https://www.youtube.com/user/NavalnyRu" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/youtube.png" alt="youtube.com/navalnytu"/></a>
      <a href="https://tvrain.ru/" rel="nofollow"><img src="https://s79369.cdn.ngenix.net/static/svg/tvrain-v2.svg?0.png" alt="tvrain.ru"/></a>
      <a href="https://vk.com/life" rel="nofollow"><img src="<?php bloginfo('template_url');?>/img/vk.png" alt="vk.com/life"></a>
    </p>
    </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      function myDate(){
      var months=['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
      var days = ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'];
      var globalDate = new Date();
      var month = months[globalDate.getMonth()];
      var day = days[globalDate.getDay()];
      var hour = globalDate.getHours();
      var min = globalDate.getMinutes();
      if (min < 10) {
        min = '0' + min;
      };
      var mydate = ' '+month +'.' + day +'.'+ hour +':' + min;
      return mydate;
    };
      var postDate = myDate();

      $('.lead').html(postDate);
});
  </script>
   <?php wp_footer(); ?>
</body>
</html>