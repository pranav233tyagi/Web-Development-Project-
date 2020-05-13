<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us</title>
        <style>
            footer{
                background-color: #494949;
                color:#FFFFFF;
                position:fixed;
                clear:both;
                width: 100%;
                text-align: center;
                bottom: 0;
            }
            .row_style{
                margin-top:60px;
            }
            .link{ 
            color: #FFFFFF;
             }
             .glyphicon.glyphicon-usd,.glyphicon.glyphicon-search,
            .glyphicon.glyphicon-hourglass {
                                                font-size: 75px;
                                            }
            hr{
                    transform: rotate(90deg);
                     width: 1px;
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
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user "></span>  Sign Up</a></li>
                         <li type="button" data-toggle="modal" data-target="#myModal"><a href="#"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        <li><a href="about us.html"><span class="glyphicon glyphicon-th-list "></span> About Us</a></li>
                        <li><a href="contact us.html"><span class="glyphicon glyphicon-phone "></span>  Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row_style">
            <center><h2>We believe our 3 customer promises set us apart from the rest.<br>
            Have a read below:</h2></center>
        </div>
        </div><br><br>
        <div class="container">
        <div class="row row_style">
            <div class="col-md-4 col-sm-3">
                <center><span class="glyphicon glyphicon-usd"></span></center>
                   <h1>Easy-peasy pricing</h1>
            <p>We keep our pricing straightforward and our reviews straight talking Plus ,we  gurantee to either price or product-match any appliance you see cheaper or can't find our in range.</p>
            </div> 
                                
            <div class="col-md-4 col-sm-3">
                <center><span class="glyphicon glyphicon-search"></span></center>
                   <h1>Upfront,no cover-ups</h1>
                <p>Honesty's always our policy,so we'll give you clear commitments and genuine offers.Any terms and conditions will be in large print,not small print-no ifs,no buts and no hidden catches.</p>
            </div>
            <div class="col-md-4 col-sm-3">
                <center><span class="glyphicon glyphicon-hourglass"></span></center>
                <h1>Famously flexible</h1>
                <p>Everyone's different and that's why we will do everything we can to work around you .From delivery 7 days of the week,14-day no-fuss returns and even 4-hour delivery slots for pinpoint punctuality.</p>          
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
                    <a class="link" href="about us.html"><h5>About Us</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link"  href="login.html"><h5>Login</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <h5>Contact +91 9000000000</h5>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link"  href="contact us.html"><h5>Contact Us</h5></a>
                </div>
                 <div class="col-md-4 col-sm-4">
                    <a  class="link" href="signup.html"><h5>Signup</h5></a>
                 </div>

               </footer>              
            </div>

              <!-- Modal -->
                         <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Login</h4>
                            </div>
                            <div class="modal-body">
                              <div class="panel ">
                                        <div class="panel-body">
                                            <p>Don't have an account?<a href="signup.html"> Register</a></p>
                                            <form>
                                                <div class="form-group">
                                                <input type="text" name="Email" placeholder="Email" class="form-control"></div>
                                                <div class="form-group">
                                                <input type="text" name="Password" placeholder="Password" class="form-control"></div>
                                            </form>
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                        <div>
                                            <footer class="panel-footer"><a href="#">Forget Password?</a></footer>
                                    </div>
                                
                            </div>
                            
                          </div>
                          
                        </div>
                      </div>

        </body>
        </html>
                
