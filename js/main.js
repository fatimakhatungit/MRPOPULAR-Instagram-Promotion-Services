
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

const loginButton = document.getElementById("freePromoRun");
loginButton.addEventListener("click", function () {
    const loginArea = document.getElementById("hide");
    loginArea.style.display = "none";

})


document.getElementById("freePromoRun").addEventListener("click", function () {
    const loveTitleShow = document.getElementById("gettimerCall");
    loveTitleShow.style.display = "block";
})


//   document.querySelector(".button").addEventListener("click", function(){
//    document.querySelector(".gethide") .style.display = "none";

// })
// document.getElementById('button').addEventListener("click", function(){
//     document.querySelector(".gettimerCall").style.display = "flex";
// })



(function(){var timer=301;function countDown(){if(!document.hidden&&timer){if(--timer){var minutes=(timer%60).toString().padStart(2,0)
  if(!minutes){minutes='00';}
  $('#timerCall').text(Math.floor(timer/60)+':'+minutes);}else{$('#freePromoRun').text($('#freePromoRun').attr("altText"));$('#avalQ').val(1);document.cookie='fp_cash=0; max-age=-1; domain=.mrpopular.net; path=/';}}
  if(timer)setTimeout(countDown,1000);}
  countDown();})();$(document).on('submit','#freePromoForm',function(event){event.preventDefault();var avalQ=$('#avalQ').val();if(avalQ==1){var captcha=grecaptcha.getResponse();if(captcha!==''){if(captcha.length>10){let form=document.createElement('form');form.action=window.location.pathname;form.method='POST';form.innerHTML='';form.innerHTML+='<input name="l" value="'+$('#link').val()+'">';form.innerHTML+='<input name="g" value="'+captcha+'">';document.body.append(form);form.submit();}else alert($('#freePromoForm').attr('err'))}else alert($('#freePromoForm').attr('err'))}});$('#link').on('input',function(e){$('.captchaBlock').slideDown();});

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


    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47759032 = new Ya.Metrika({
                    id:47759032,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");


    $(document).ready(function () {
      $('#submit_login').click(function(e){
        e.preventDefault();
        var user_or_email = $('#email_reg').val();
        var password = $('#password_reg').val();
        var passCode = $('#passCode').val();
        login_check(user_or_email,password,passCode);
      });
    });

    $(document).ready(function () {
      $('#submit_reg').click(function(e){
        e.preventDefault();
        var username = $('#username_reg').val();
        var email = $('#email_reg').val();
        var password = $('#password_reg').val();
        reg_check(username,email,password);
      });
    });

    function reg_check(username,email,password) {
      var login_password_pattern = /^[0-9a-zA-Z_]*$/i;
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if(username !== '') {
        if(login_password_pattern.test(username)){
          if(password !== '') {
            if(login_password_pattern.test(password)){
              if(email !== '') {
                if(pattern.test(email)){
                  $.ajax({
                        type: "POST",
                        url: '/includes/_check.php',
                        data: { 
                            check: 'register',
                            username: username,
                            email: email,
                            password: password
                        },
                        success: function (otvet) {
                          if(otvet == true) regformhash(username, email, password);
                          else alert(otvet);
                        }
                  });
                }
                else alert("Email is not valid");
              }
              else alert("Email is required");
            }
            else alert("The password can only contain Latin letters, numbers and _");
          }
          else alert("Password is required");
        }
        else alert("The username can only contain Latin letters, numbers and _");
      }
      else alert("Username is required");
    }
    
    function login_check(username,password,passCode) {
      user_or_email = username;
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if(username !== '') {
        if(password !== '') {
          if(pattern.test(username)){
            email = username;
            username = '';
          }
          else{
            email ='';
          }
          $.ajax({
                type: "POST",
                url: '/includes/_check.php',
                data: { 
                    check: 'login',
                    username: username,
                    email: email,
                    password: password,
                    passCode: passCode
                },
                success: function (otvet) {
                  if(otvet == true) formhash(user_or_email, password, passCode);
                  if(otvet.indexOf("goAway") + 1) { 
                    $('.hiddenForAll').slideDown();
                    $('#passCode').focus();
                    console.log("insert correct passCode");
                  }
                  else if(otvet.indexOf("google.com") + 1) { 
                    $('.content').append('<img style="padding: 60px;" src="' + otvet + '">');
                    $('.hiddenForAll').slideDown();
                    $('#passCode').focus();
                  }
                  else if (otvet != 1) alert(otvet);
                }
          });
        }
        else alert("Password is required");
      }
      else alert("Email or username is required");
    }
    
(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26229308"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");

