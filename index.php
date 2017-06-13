<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autorização para o Monitor</title>
    <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '674584949359563',
        xfbml      : true,
        version    : 'v2.9'
      });
      FB.AppEvents.logPageView();
    };

    (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
  </head>
  <body>
    <div class="fb-login-button"
         data-max-rows="1"
         data-size="large"
         data-button-type="continue_with"
         data-show-faces="false"
         data-auto-logout-link="false"
         data-use-continue-as="false"></div>
  </body>
</html>
