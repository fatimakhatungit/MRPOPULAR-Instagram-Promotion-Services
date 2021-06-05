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
            <p>API</p>
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
<div class="content">
<div class="after_body">
<div class="content">
<div class="form">
<div class="form_block">
<p class="l_gray great_text">To activate the Reseller API, write to the <a style="width: unset;padding: unset;" href="support.php">support service</a>. You must have at least $1,000 on your balance.</p><hr><a href="prices.php">Prices with the maximum discount. Only own services.</a><p></p>
</div>
<div class="form_block">
<h1>API documentation</h1>
<hr>
<p>URL</p>
<hr>
<p class="l_gray great_text">https://mrpopular.net/api/v3.php</p>
<hr>
<p>Request</p>
<hr>
<p class="l_gray great_text">POST / GET / JSON</p>
<hr>
<p>Response</p>
<hr>
<p class="l_gray great_text">JSON</p>
</div>
<div class="form_block">
<p>Authorisation</p>
<hr>
<p class="l_gray great_text">username</p>
<hr>
<p class="l_gray great_text">password</p>
</div>
<div class="form_block">
<p>Get balance</p>
<hr>
<p class="l_gray great_text">action = balance</p>
<hr>
<p class="l_gray great_text">{"balance":123.456}</p>
</div>
<div class="form_block">
<p>Get order status</p>
<hr>
<p class="l_gray great_text">action = status</p>
<p class="l_gray great_text">order = (Order id)</p>
<hr><p class="l_gray great_text">{"order":{"status":"2","completed":"0","quantity":"250","date":"2018-09-27 17:34:49"}}</p>
</div>
<div class="form_block">
<p>Get service list</p>
<hr>
<p class="l_gray great_text">action = service</p>
<hr>
<p class="l_gray great_text">{"service":{"1":{"social_network":"Facebook","service":"page likes","quality":"medium quality","id":"1","price":0.0149,"currency":"USD","min":"100","max":"900000","start":"30 min.","speed":"100/day","description":"HQ never drop"},...}}</p>
</div>
<div class="form_block">
<p>Order status decryption</p>
<hr><p class="l_gray great_text">0 : Pending/Processing</p>
<hr><p class="l_gray great_text">1 : Processing</p>
<hr><p class="l_gray great_text">2 : Completed</p>
<hr><p class="l_gray great_text">3 : Error</p>
<hr><p class="l_gray great_text">4 : In queue</p>
<hr><p class="l_gray great_text">5 : Returned</p>
</div>
<div class="form_block">
<p>New order</p>
<hr>
<p class="l_gray great_text">action = order</p>
<p class="l_gray great_text">service = (Service ID)</p>
<p class="l_gray great_text">quantity</p>
<p class="l_gray great_text">option</p>
<p class="l_gray great_text">comment</p>
<p class="l_gray great_text">link</p>
<hr><p class="l_gray great_text">{"order":"142058"}</p>
</div>
<div class="form_block">
<p>Errors</p>
<hr>
<p class="l_gray great_text">{"errorcode":0} API is not activated</p>
<hr>
<p class="l_gray great_text">{"errorcode":1} USERNAME or PASSWORD is empty</p>
<hr>
<p class="l_gray great_text">{"errorcode":2} ACTION is empty</p>
<hr>
<p class="l_gray great_text">{"errorcode":4} ORDER is empty</p>
<hr>
<p class="l_gray great_text">{"errorcode":5} wrong ORDER</p>
<hr>
<p class="l_gray great_text">{"errorcode":6} SERVICE is empty</p>
<hr>
<p class="l_gray great_text">{"errorcode":7} QUANTITY is empty</p>
<hr>
<p class="l_gray great_text">{"errorcode":8} LINK is empty</p>
<hr>
<p class="l_gray great_text">{"errorcode":9} Not enough funds on balance</p>
<hr>
<p class="l_gray great_text">{"errorcode":10} Quantity less than minimum</p>
</div>
<div class="form_block himlf">
<p>Examples of php code</p>
<hr>
<pre>            class Api
            {
              //config
              public $api_url = 'https://mrpopular.net/api/v3.php'; // API URL
              public $username = ''; //your username
              public $password = ''; //your password

                public function order($data) { // add order
                    $post = array_merge(array(
                      'username' =&gt; $this-&gt;username, 
                      'password' =&gt; $this-&gt;password,
                      'action' =&gt; 'order'
                    ), $data);
                    return json_decode($this-&gt;connect($post));
                }

                public function status($order) { // get order status
                    return json_decode($this-&gt;connect(array(
                        'username' =&gt; $this-&gt;username, 
                        'password' =&gt; $this-&gt;password,
                        'action' =&gt; 'status',
                        'order' =&gt; $order
                    )));
                }

                public function service() { // get service list
                    return json_decode($this-&gt;connect(array(
                        'username' =&gt; $this-&gt;username, 
                        'password' =&gt; $this-&gt;password,
                        'action' =&gt; 'service',
                    )));
                }

                public function balance() { // get balance
                    return json_decode($this-&gt;connect(array(
                        'username' =&gt; $this-&gt;username, 
                        'password' =&gt; $this-&gt;password,
                        'action' =&gt; 'balance',
                    )));
                }


                function connect($post) {
                    $_post = Array();
                    if (is_array($post)) {
                        foreach ($post as $name =&gt; $value) {
                            $_post[] = $name.'='.urlencode($value);
                        }
                    }

                    $ch = curl_init($this-&gt;api_url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    if (is_array($post)) {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, join('&amp;', $_post));
                    }
                    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
                    $result = curl_exec($ch);
                    if (curl_errno($ch) != 0 &amp;&amp; empty($result)) {
                        $result = false;
                    }
                    curl_close($ch);
                    return $result;
                }
            }

            //start API
            $api = new Api();

            //check balance
            /*$balance = $api-&gt;balance();
            print_r($balance);*/

            //new order
            /*$order = $api-&gt;order(array(
              'service' =&gt; 462, 
              'quantity' =&gt; $qnty, 
              'link' =&gt; $src
            ));
            print_r($order);*/

            //order status
            /*$status = $api-&gt;status(12232);
            print_r($status);*/

            //service list
            /*$service = $api-&gt;service();
            print_r($service);*/
          </pre>
</div>
</div>
</div>
</div>
</div>
</div>

		
		
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
