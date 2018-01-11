<html<html>
    <head>
    <title>My Now Amazing Webpage</title>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css"/>
    </head>
    <body>

    <div class="the-slider">
  <div><img src="http://placehold.it/100x100&text=[ img 1 ]" /></div>
  <div><img src="http://placehold.it/100x100&text=[ img 2 ]" /></div>
  <div><img src="http://placehold.it/100x100&text=[ img 3 ]" /></div>
  <div><img src="http://placehold.it/100x100&text=[ img 4 ]" /></div>
  <div><img src="http://placehold.it/100x100&text=[ img 5 ]" /></div>
  <div><img src="http://placehold.it/100x100&text=[ img 6 ]" /></div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>


    <script type="text/javascript">
               $(document).ready(function(){       

$('.the-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
    
        });
</script>
 
    </body>
</html>