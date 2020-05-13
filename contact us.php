<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
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
                margin-top:50px;
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
                        <li type="button" data-toggle="modal" data-target="#myModal"><a href="#"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        <li><a href="about us.php"><span class="glyphicon glyphicon-th-list "></span> About Us</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-phone "></span>  Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

         <div class="row row_style">
            <div class="container">
                <div class="col-md-8  col-sm-6">
                    <h1>LIVE SUPPORT</h1>
                    <h4>24 Hours | 7 days a week | 365 days a year Technical Support</h4>
                    <p>E-Store is the world's most used platform for managing social media . We support more than 10 million customers around the world from offices in the eight countries if you are looking for more information  or have a question about our account contact us below .</p>
                </div>                        
                 <div class="col-md-4 col-sm-6">
                    
                    <center><img style="height: 200px;" src="live-support-24-v.jpg"></center>

                </div>
            </div>
        </div>
        <div class="row">
                    <div class="container">
                    <div class="col-md-6 col-sm-6">
                    <h1>Contact US</h1>
                     <div class="form-group">
                            Name: <input type="text" name="Name"  class="form-control"></div>
                            <div class="form-group">
                            Email:  <input type="text" name="Email" class="form-control"></div>
                            Message:<br>
                            <textarea rows="4" cols="50"></textarea><br>
                            <button class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1 style="text-align: right;">Company Information:</h1>
                        <p style="text-align: center;">     500 lorem ipsum dolor sit, <br><br>
                                22-56-2-9 Sit Amet,Lorem,USA<br><br>
                                
                                Phone:(00)222 666 444<br><br>

                                Fax:(000) 000 00 00 0<br><br>

                                Email:info@mycompany.com<br><br>

                                Follow on:Facebook,Twitter.<br><br>
                        </p>
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
                                            <p>Don't have an account?<a href="signup.php"> Register</a></p>
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
                      
                
