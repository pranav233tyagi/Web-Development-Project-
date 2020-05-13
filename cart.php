<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="product.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart Page</title>
        <style>
            .row_style{
                margin-top:300px;
                margin-left: 80px;

            }
           footer{
                background-color: #494949;
                color:#FFFFFF;
                position:fixed;
                clear:both;
                width: 100%;
                text-align: center;
                bottom: 0;
            }
                
            }
            .table_style{
                margin-top:250px;
            }
            .table_content{
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
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>  Setting</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row_style">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table_style table-hover">
            <tr>
                <th class="table_content">Item Number</th>
                <th class="table_content">Item Name</th>
                <th class="table_content">Price</th>
                <th class="table_content">Price</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th class="table_content">Total</th>
                <th class="table_content">Rs 0/-</th>
                <th class="table_content"><button class="btn btn-primary">Confirm Order</button></th>
            </tr>
        </table>
    </div>
</div>
</div>


              <div>
                <footer>
                 <div class="col-md-4 col-sm-4">
                    <h4>Information</h4>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h4>My Account</h4>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h4 class="link">Contact us</h4>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a class="link" href="about us.php"><h5>About Us</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link"  href="login.php"><h5>Login</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h5>Contact +91 9000000000</h5>
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
            
          