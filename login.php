<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <style>
            .row_style{
                margin-top:210px;
                margin-left: 370px;
            }
            #abc{
                padding: 10px 0; 
                background-color: #494949;
                color:#9d9d9d;
                position:absolute;
                bottom: 0;
                width: 100%;
                text-align: center;
            }
            .link{ 
            color: #FFFFFF;
             }

            
            </style>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    <a href="#" class="navbar-brand">E-Store</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user "></span>  Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="row row_style">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <p>Don't have an account?<a href="signup.php"> Register</a></p>
                        <form action="login_script.php" method="POST">
                            <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <div><?php echo $_GET['email_error']; ?></div>
                        </div>
                            <div class="form-group">
                            <input type="text" name="password" placeholder="Password" class="form-control" required="true" pattern=".{6,}">
                            <div><?php echo $_GET['password_error']; ?></div>
                            </div>
                        <button class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div>
                        <footer class="panel-footer"><a href="#">Forget Password?</a></footer>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
             
                <footer id="abc">
                 <div class="col-md-4 col-sm-4">
                    <h4>Information</h4>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h4>My Account</h4>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h4 >Contact us</h4>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a class="link" href="about us.php"><h5>About Us</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link"  href="login.php"><h5>Login</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h5 class="link">Contact +91 9000000000</h5>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link"  href="contact us.php"><h5>Contact Us</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link" href="signup.php"><h5>Signup</h5></a>
                 </div>

               </footer>              
            </div>
            
</body>
</html>