<?php
include 'connect.php';

?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/img/logo.png" id="img1"><strong>Online Dj Booking</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right .cst" id="z1">
                    <li role="presentation"><a href="#" id="login" data-toggle="modal" data-target="#login-modal" style="cursor:pointer">LogIn </a></li>
                    <li role="presentation"><a href="#" id="register" data-toggle="modal" data-target="#register-modal">Register </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center" id="a"><em>Dj Booking</em></h1></div>
        <div class="container">
            <p class="text-center"><strong>Book your favorite dj at the cheepest price here...</strong></p>
        </div>
        <div class="container">
            <p class="text-center"><strong>For booking click to login</strong></p>
        </div>
        <div class="container">
            <p class="text-center"><strong>and proceed.!!!</strong></p>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="login-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-head">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h1 class="text-center font-sze">Login </h1></div>
                    <div class="modal-body cst-bdy">
                        <div class="container">
                            <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-xs-12">
                                <div class="img-ctr"></div>
                                <div class="login-popup">
                                    


                                    <form method="post" action="do_login.php">
                                        <input class="form-control input-lg login-text" name="u_phone" type="text" required="" placeholder="phone number" maxlength="10" minlength="10" pattern="[1-9][0-9]*" inputmode="tel">
                                        <input class="form-control input-lg login-text" name="u_passwor" type="password" placeholder="password">
                                       <input class="btn btn-primary btn-lg btn-cst-2" type="submit" value="Login" style="margin-top:10px;width:100px;">
                                    </form>

                                    <?php
                                    if($_GET['flag']==1)
                                    {
                                       echo '<script language="javascript">';
                                     echo 'alert("Wrong credentials")';
                                     echo '</script>'; 
                                    }
                                     
                                    ?>


                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal-foot">
                        <p class="ques">New to this website? </p>
                        <div class="d-modal-footer ques"><a class="sign-up" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">Register Here</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="register-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-head">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h1 class="text-center">Register </h1></div>
                    <div class="modal-body cst-bdy">
                        <div class="container">
                            <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-xs-12">
                                <div class="login-popup">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <input class="form-control input-lg register-text name-txt"   name="user_name"     type="text" required="" placeholder="Name" maxlength="15">
                                        <input class="form-control input-lg" type="tel" required=""   name="user_phone"    placeholder="Phone Number" maxlength="10" minlength="10" pattern="[1-9][0-9]*">
                                        <input class="form-control input-lg last-txt register-text"   name="user_password" type="password" required="" placeholder="Password" maxlength="10" minlength="6">
                                        <input class="form-control input-lg email-input" type="email" name="user_email"    required="" placeholder="Email" inputmode="email">
                                        <input type="file" required="" name="user_image"     id="img_upload">
                                        <input class="btn btn-primary btn-lg btn-cst-2"  name="abc" type="submit" value="Register" style="margin-top:10px;width:100px;">
                                    </form>

                                    





                                    <?php
                                    if(isset($_POST['abc']))
                                    {
                                        $name=$_POST['user_name'];
                                        $phone=$_POST['user_phone'];
                                        $pass=$_POST['user_password'];
                                        $email=$_POST['user_email'];
                                        
                                        $image_name=$_FILES['user_image']['name'];
                                        $image_temp=$_FILES['user_image']['tmp_name'];

                                        move_uploaded_file($image_temp,"assets/img/$image_name");
                                            
                                    $query="insert into user(u_name,u_phone_no,u_email_id,u_password,u_image)";
                                    $query.=" values('{$name}','{$phone}','{$email}','{$pass}','{$image_name}')";

                                    $select_query=mysqli_query($connection,$query);
                                    $id=mysqli_insert_id($connection);
                                    }
                                    ?>















                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal-foot">
                        <p class="ques">Already a Member? </p>
                        <div class="d-modal-footer ques"><a class="sign-in" data-target="#login-modal" data-toggle="modal" data-dismiss="modal" cursor="pointer">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center" id="x">About Us</h1>
        <p class="text-center">WeYour DJ loves music and enjoys working with you and others to create a fun, successful event. An attitude of professionalism is what sets apart substandard service from excellent and memorable performance. We take pride in responding to your
            needs and designing entertainment in a manner that reflects well upon you and your even<em>t.</em> We provide best dj services at very geniune price, Just login and book Your favorite dj today</p>
    </div>
    <div class="container">
        <h1 class="text-center"><strong><em>Dj's Gallary</em></strong></h1></div>
    

        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            

                <?php
                
                $query="select * from dj";
                $select_query=mysqli_query($connection,$query);
                while ($row=mysqli_fetch_assoc($select_query)) 
                {
                
                ?>
            
                <div class="well well-sm .cst">
                    <div class="thumbnail">
                    <?php
                    echo '<img class="img-thumbnail" style="height:200px;" src="assets/img/'.$row['d_image'].'"/>';
                    ?>

                    <div class="caption">
                        <h2>
                        <?php 
                        echo "$row[d_name]";
                        ?>
                        </h2>
                        <h3>By:- 
                        <?php 
                        echo "$row[d_by]";
                        ?>

                        </h3>
                        <h4>Rating:- 
                        <?php 
                        echo "$row[d_rating]";
                        ?>
                        </h4>
                        <a class="btn btn-primary active btn-block btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Click to Book</a></div>
                    </div>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
    
    <section>
        <footer>
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">DJ Booking <span>App </span></a></h3>
                    <p class="company-name">Company Name © 2015 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +1 555 123456</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">support@company.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </footer>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>