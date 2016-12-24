<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
    </head>
    <body>
        <span id="login_container"></span>
        <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
        <script>
            var obj = new WxLogin({
              id: "login_container",
              appid: "wx7eee3208b7b59ea1",
              scope: "snsapi_login",
              redirect_uri: encodeURIComponent("http://" + window.location.host + "/mobile/index.php"),
              state: Math.ceil(Math.random()*1000),
              style: "black",
              href: ""});
        </script>
    </body>
</html>

