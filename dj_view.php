<?php
    include("checkLogin.php");
   include 'connect.php';
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dj_view</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href=""><img src="assets/img/logo.png" id="img1"><strong>Online Dj Booking</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right .cst" id="z3">
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
                $x=$_GET['dj_id'];
                $query="select * from dj where d_id=$x";
                $select_query=mysqli_query($connection,$query);
                while ($row=mysqli_fetch_assoc($select_query)) 
                {
                

                $_SESSION['id_dj']=$row['d_id'];
                $_SESSION['name_dj']=$row['d_name'];


                echo'    <h5 class="text-center panel-title"><strong>'.$row['d_name'].'</strong></h5></div>
                <div class="panel-body cst">
                    <ul class="list-group">
                        <li class="list-group-item cve"><img class="img-thumbnail img-responsive"  width="300px" height="50px" src="assets/img/'.$row['d_image'].'"></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>Dj id:- '.$row['d_id'].'</strong> </span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>Contact:- '.$row['d_phone_no'].'</strong></span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>Dj_by:- '.$row['d_by'].'</strong></span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>Day Charges:- '.$row['d_day_charges'].'</strong></span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>Evening Charges:- '.$row['d_evening_charges'].'</strong></span></li>
                        <li class="list-group-item list-group-item-info"><span class="info"><strong>Rating:- '.$row['d_rating'].'</strong></span></li>
                    </ul>
                </div>';
                }

                ?>




            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <h1 class="text-left cst">Description:- </h1>
            <p class="text-justify" id="p1">A DJ with years of experience entertaining in northern Ohio, Over 12,000 songs brought to your event, No breaks - music played during cocktails, dinner &amp; dancing, DJ arrives 1 hour before start time to set-up and conduct sound check, DJ
                familiar with indoor &amp; outdoor set-up and sound mixingProfessional grade gear that delivers full, clear soundWireless microphone system for announcements anywhere in the room, Dance floor lighting that includes multi-color ballroom
                affect and laser lightAccess to online music request system and advice from your DJ on planning, All introductions and special festivities announced throughout the event as directed by you, Requests from your guests incorporated into the
                playlist unless otherwise directed by you, All of the above and more at a VERY affordable rate. </p>
            <h2 class="text-center" id="c">Available Dates</h2>
    
    <form class="form-signin" method="post" action="final_page.php"> 
            

            <div id="radio">
            
                <?php
                $x=$_GET['dj_id'];
                $query="select b_avail_date from booking_dates_status where d_id=$x";
                $select_query=mysqli_query($connection,$query);
                while ($row=mysqli_fetch_assoc($select_query)) 
                {
                

                    echo'<div class="radio cst">
                    <label>
                        <input type="radio" class="r" name="radio_dates" value="'.$row['b_avail_date'].'">'.$row['b_avail_date'].'</label>
                    </div>';
                }
                ?>


            </div>
        </div>
    </div>
    <div class="container cst" id="abc" >
        

        
        <span class="reauth-email"> </span>   
            <input class="form-control input-lg cst" type="text" name="amt" required="" placeholder="Payment Amount" pattern="[0-9]*">
            <select class="form-control input-lg" required="" name="mode">
                    <optgroup label="Payment Mode" >
                    <option value="Cash">Cash</option>
                    <option value="Paytm">Paytm</option>
                </optgroup>
            </select>
            <input class="btn btn-primary btn-block btn-lg cst" type="submit" name="xxx" value="Confirm Booking" style="margin-top:10px">
            

        </form>


                                    


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
