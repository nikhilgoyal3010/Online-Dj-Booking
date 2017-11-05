<?php
    include("checkLogin.php");
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_view</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
                <ul class="nav navbar-nav navbar-right .cst" id="z2">
                    <li role="presentation"><a href="logout.php" id="logout">LogOut </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-lg-4 col-md-12 cst">
            <div class="panel panel-info">
                <div class="panel-heading pane_head">


                 <?php
                include 'connect.php';
                $xyz=$_SESSION['user_phone'];
                $query="select * from user where u_phone_no=$xyz";
                $select_query=mysqli_query($connection,$query);
                while ($row=mysqli_fetch_assoc($select_query)) 
                {
                        $user_id=$row['u_id'];

                    echo'<h5 class="text-center panel-title"><strong>' . $row['u_name'] . '</strong></h5></div>
                <div class="panel-body cst">
                    <ul class="list-group">
                        <li class="list-group-item cve"><img class="img-thumbnail img-responsive" width="300px" height="50px" src="assets/img/'.$row['u_image'].'"/></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>'.$row['u_id'].'</strong> </span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>'.$row['u_phone_no'].'</strong></span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>'.$row['u_email_id'].'</strong></span></li>
                    </ul>
                </div>';
                }
                ?>






                    
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <h1 class="text-center"><strong>Booking History</strong></h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="warning">
                            <th>DJ_ID </th>
                            <th>DJ_NAME </th>
                            <th>Date </th>
                            <th>Payment_amt </th>
                            <th>Payment_mode </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                            $query="select * from booking_details where u_id=$user_id";
                            $select_query=mysqli_query($connection,$query);
                            while ($row=mysqli_fetch_assoc($select_query)) 
                            {
                                echo'<tr class="success">
                                <td><strong>'.$row['d_id'].'</strong> </td>
                                <td><strong>'.$row['d_name'].'</strong></td>
                                <td><strong>'.$row['b_date'].'</strong> </td>
                                <td><strong>'.$row['b_payment_amt'].'</strong> </td>
                                <td><strong>'.$row['b_payment_mode'].'</strong> </td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <h2 class="text-center" id="c"><em><span style="text-decoration: underline;">Select Your Favorite dj's from following list :-</span></em><span style="text-decoration: underline;"> </span></h2></div>
    </div>
   

    <div class="container cst" id="abc">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            
           
                <?php
                include 'connect.php';
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
                        </h4><?php
                        echo'<a class="btn btn-primary active btn-block btn-lg" role="button" href="dj_view.php?dj_id='.$row['d_id'].'">Click to Book</a></div>'?>
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