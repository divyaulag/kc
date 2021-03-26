<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/logandsignup.css" rel="stylesheet">
    <style type="text/css">
        #p{
            position: absolute;
            top: 0;
            right: 0;

        }
    </style>
    
  </head>
  <body class="text-center">    

    <form class="form-signin" method="post" action="admin-login.php">
        
        <h1 class="h3 mb-3 font-weight-normal">Log in to Admin Panel</h1>
        <?php displayMessage(); ?>

        <label for="inputEmail" class="sr-only" >Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" autocomplete="off" required autofocus>


        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin-submit">Sign in</button>
        <br>
        Not an Admin? <a href="index.php" name="login">Login?</a>
        
    </form> <script type="text/javascript"> (function(d, m){ var kommunicateSettings = </body> 
            {"appId":"93cc55227ab05c5fe305c32581e0ad03","popupWidget":true,"automaticChatOpenOnNavigation":true};</html>
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = 
        "https://widget.kommunicate.io/v2/kommunicate.app"; var h = document.getElementsByTagName("head")[0]; h.appendChild(s); window.kommunicate = 
        m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
</body>
</html>
