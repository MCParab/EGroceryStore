



<!DOCTYPE HTML>
<html>
    <head>
        <title>KiranaBazar</title>
        <link rel="stylesheet" href="css/main-style.css" type="text/css"/>
        <script src="js/jquery-2.1.3.min.js"></script>
        
    </head>
    <body>
        
        
        <section class="loginform">
        <h1>Login</h1>
            <form method="POST"  action="products.php">
                <ul>
                    <li><input type="text" placeholder="User Name " name="username" autofocus/></li>
                    <li><input type="password" placeholder="Password " name="password" /></li>
                    <li><input type="submit" name="submit" value="Login"/></li>
                </ul>
            </form>
        </section>
        
        
          <!---Header--->
        <header class="Myheader">
            <h1>KiranaBazar</h1>
            <div id="menubar" style="width:400px;">
                <ul>
                    <li><a href="index.php">Home</a></li>
                   
                    <li><a href="signin_form.php">SignUp</a></li>
                    <li><a href="login.php"  class="login" >Login</a></li>
                    
                </ul>
            </div>
        </header>
        
        </body>
    </html>