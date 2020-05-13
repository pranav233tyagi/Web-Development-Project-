<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        <style>
            
            .row_style{
                margin-top:20px;
            }
           .link{ 
           	color: #FFFFFF;
           	 }
              #abc{
                 background-color: #494949;
                color:#FFFFFF;
                position:absolute;
                clear:both;
                width: 100%;
                text-align: center;
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
                        <li><a href="signup.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                        <li type="button" data-toggle="modal" data-target="#myModal"><a href="#"><span class="glyphicon glyphicon-user"></span>  Settings</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in "></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="jumbotron">
                <center><h1>Best Deal On Smartphones</h1>
                <p>>We have the best Smartphones for you. No need to hunt around, We have all in one place </p></center>
            </div>
        
            
      
            <div class="row row_style">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>SmartPhone</h4>
                        </div>
                        <div class="panel-body">
                            <a class="thumbnail"><img src="1.jpeg" alt="responsive image">
                        <center><caption>Samsung galaxy A-20</caption>
                        <p>Price: Rs.36000.00</p></center>
                        <button class="btn btn-primary btn-block">Add to cart</button></a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>SmartPhone</h4>
                        </div>
                         <div class="panel-body">
                        <a class="thumbnail"><img src="2.jpeg" alt="responsive image">
                       <center> <caption>Samsung galaxy A-51</caption>
                        <p>Price: Rs.66000.00</p></center>
                        <button class="btn btn-primary btn-block">Add to cart</button></a>
                      </div>
                    </div>
                 </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4>SmartPhone</h4>
                         </div>
                        <div class="panel-body">
                        <a class="thumbnail"><img src="3.jpeg" alt="responsive image">
                       <center> <caption>Samsung galaxy J5</caption>
                        <p>Price: Rs.46000.00</p></center>
                        <button class="btn btn-primary btn-block">Add to cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_style">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>SmartPhone</h4>
                        </div>
                        <div class="panel-body">
                            <a class="thumbnail"><img src="4.jpeg" alt="responsive image">
                        <center><caption>Samsung galaxy J4</caption>
                        <p>Price: Rs.36000.00</p></center>
                        <button class="btn btn-primary btn-block">Add to cart</button></a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>SmartPhone</h4>
                        </div>
                         <div class="panel-body">
                        <a class="thumbnail"><img src="5.jpeg" alt="responsive image">
                       <center> <caption>Samsung galaxy Note 9</caption>
                        <p>Price: Rs.66000.00</p></center>
                        <button class="btn btn-primary btn-block">Add to cart</button></a>
                      </div>
                    </div>
                 </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4>SmartPhone</h4>
                         </div>
                        <div class="panel-body">
                        <a class="thumbnail"><img src="6.jpeg" alt="responsive image">
                       <center> <caption>Samsung galaxy J6</caption>
                        <p>Price: Rs.46000.00</p></center>
                        <button class="btn btn-primary btn-block">Add to cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><hr>         



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
            
