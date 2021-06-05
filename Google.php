<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MRPOPULAR | Instagram Promotion Services</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        

</head>


    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


		  <div id="pre_b">
            <div id="burger_menu">
            <a target="_top" href="/"><i class="fas fa-home"></i>home</a>
            <a target="_top" href="socialnetworks.php"><i class="fas fa-hashtag"></i>social networks</a>
            <a target="_top" href="rating.php"><i class="fas fa-hashtag"></i>ratings &amp; reviews</a>
            <hr>
            <a target="_top" href="cart.php"><i class="fas fa-shopping-cart"></i>cart</a>
            <a target="_top" href="subscriptions.php"><i class="fas fa-sync"></i>subscriptions</a>
            <a target="_top" href="history.php"><i class="fas fa-history"></i>orders</a>
            <a target="_top" href="addfunds.php"><i class="far fa-credit-card"></i>add funds</a>
            <a target="_top" href="promocode.php"><i class="fab fa-accessible-icon"></i>activate promo code</a>
            <hr>
            <a target="_top" href="partnership.php"><i class="fas fa-dollar-sign"></i>affiliate program</a>
            <a target="_top" href="getfree.php"><i class="fas fa-shopping-cart"></i>free promotion</a>
            <hr>
            <a target="_top" href="support.php"><i class="fas fa-question"></i>support</a>
            <a target="_top" href="info.php"><i class="far fa-file-alt"></i>information</a>
            <a target="_top" href="reviews.php"><i class="far fa-comment-alt"></i>reviews</a>
            <hr>
            <a target="_top" href="api.php"><i class="fas fa-terminal"></i>public API</a>
            <a target="_top" href="resell.php"><i class="fas fa-terminal"></i>reseller API</a>
            <hr>
            <a style="color:#d8194c;" href="login.php"><i class="fas fa-sign-in-alt"></i>log in</a><a style="color:#d8194c;" href="/register.php"><i class="fas fa-sign-in-alt"></i>sign up</a> <hr>
            </div>
            </div>
		
        <!-- header start -->

        <header>
            <div id="burger" class="openable">
            <div id="center"></div>
            </div>
            <div class="path hide1100max">
             <p>Home <span>-Google</span></p>
            </div>
            <div class="op">
            <div id="balance">
            <a target="_top" href="addfunds.php">balance $0</a>
            </div>
            <div id="cart">
            <a target="_top" href="cart.php">cart</a>
            </div>
            </div>
            </header>

            <!-- header end -->

          
            <div class="after_body">
<div style="margin: 65px 15px 0 15px;"><a href="/?category=rating&amp;type=Google&amp;service=Play">
<div class="main_blog_smm">
<div class="hovereffect">
<img class="img-responsive" src="img/service/play google.svg" alt="Play Google">
<div class="overlay">
<h3>Play</h3>
</div>
</div>
</div>
</a>
<a href="Business.php">
<div class="main_blog_smm">
<div class="hovereffect">
<img class="img-responsive" src="img/service/бизнес google.svg" alt="Business Google">
<div class="overlay">
<h3>Business</h3>
</div>
</div>
</div>
</a>
<a href="Maps.php">
<div class="main_blog_smm">
<div class="hovereffect">
<img class="img-responsive" src="img/service/карты google.svg" alt="Maps Google">
<div class="overlay">
<h3>Maps</h3>
</div>
</div>
</div>
</a>
<a href="Podcasts.php">
<div class="main_blog_smm">
<div class="hovereffect">
<img class="img-responsive" src="img/service/podcasts google.svg" alt="Podcasts Google">
<div class="overlay">
<h3>Podcasts</h3>
</div>
</div>
</div>
</a>
</div> </div>
		
		
		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/shop_new.js"></script>
        <script src="js/analytics.js"></script>
        <script src="js/bat.js"></script>
        <script src="js/watch.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            //при отправки товара в корзину
            var doubleSentCheck = true;
          
          $('#_shop_addToCart_submit').click(function(e){
            e.preventDefault();
            min = +$('#_shop_qnty').attr('qnty_min');
            val = +$('#_shop_qnty').val();
            price = +$('#_shop_qnty').attr('real_price');
            bill = +Math.ceil(val*price*4)/4;
          
            //проверяем минимально количество
            if(val >= min){
              s_min_qnty = true;
            }
            else {
              doubleSentCheck = true;
              alert('minimum quantity '+min+' ');
            }
          
            //проверяем минимальную сумму заказа
            if(bill >= 0.05){
              s_min_bill = true;
            }
            else {
              doubleSentCheck = true;
              alert('minimum amount $0.05 ');
            }
          
            //если все ок, отправляем
            if(s_min_qnty == true && s_min_bill == true && doubleSentCheck){
              $('#add_to_cart').submit();
              doubleSentCheck = false;
            }
          
          });
          </script>
          <script>
            //при изменении цены
          $('#_shop_qnty').keyup(function(){
            min = +$(this).attr('qnty_min');
            val = +$(this).val();
            price = +$(this).attr('price');
            bill = ((val*price*10000)/10000).toFixed(4);
            $('#qnty').text(val);
            $('#qnty').text(val);
            $('#bill').text(bill);
          });
          </script>

<script>
  $(document).ready(function () {
    $('#addfunds_form_submit').click(function(e){
      e.preventDefault();
      var val = $('#_addfunds_val').val();
      if(val >= 1) $('#addfunds_form').submit();
      else alert('minimum payment ammount $1 ');
    });
  });
  </script>
    </body>
</html>
