<?php
    include("checkLogin.php");
    include 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles2.css">
    <link rel="stylesheet" href="assets/css/header.css">
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
                    <li role="presentation" id="z4"><a href="logout.php" id="logout">LogOut </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container cst">
        <h1 class="text-center"><strong>Admin View </strong></h1><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#view-bookings">View Bookings</a><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#view-dj-lists">View Dj Lists</a>
        <a
        class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#view-users">View Users</a><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#b-date-status">B_Date Status</a><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#adddj">Add New Dj</a>
            <a
            class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#add">Add Avail Date</a>
      


                <div class="modal fade cst" role="dialog" tabindex="-1" id="view-bookings">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="success cst">
                                                <th class="ee">U_id </th>
                                                <th class="ee">U_Contact_no<strong> </strong></th>
                                                <th class="ee">D_id </th>
                                                <th class="ee">D_Name </th>
                                                <th class="ee"> Date </th>
                                                <th class="ee">Pay_Mode </th>
                                                <th class="ee">Amount </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            

                                            <?php
                                            
                                            $query="select * from booking_details";
                                            $select_query=mysqli_query($connection,$query);
                                            while ($row=mysqli_fetch_assoc($select_query)) 
                                            {

                                                echo'<tr class="active cst">
                                                    <td>'.$row['u_id'].'</td>
                                                    <td>'.$row['u_phone_no'].'</td>
                                                    <td>'.$row['d_id'].'</td>
                                                    <td>'.$row['d_name'].'</td>
                                                    <td>'.$row['b_date'].'</td>
                                                    <td>'.$row['b_payment_mode'].'</td>
                                                    <td>'.$row['b_payment_amt'].'</td>
                                                    </tr>';
                                            }

                                            ?>


                                                                                       
                                        </tbody>
                                        <caption class="lead"><strong>Booking details : - </strong></caption>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade cst" role="dialog" tabindex="-1" id="view-dj-lists">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="success cst">
                                                <th class="ee">D_id </th>
                                                <th class="ee">D_Name </th>
                                                <th class="ee">D_by </th>
                                                <th class="ee">Rating </th>
                                                <th class="ee"> Day_Charges</th>
                                                <th class="ee">Eve_charges </th>
                                                <th class="ee">Icon </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            
                                            $query="select * from dj";
                                            $select_query=mysqli_query($connection,$query);
                                            while ($row=mysqli_fetch_assoc($select_query)) 
                                            {

                                                echo'<tr class="active cst">
                                                    <td>'.$row['d_id'].'</td>
                                                    <td>'.$row['d_name'].'</td>
                                                    <td>'.$row['d_by'].'</td>
                                                    <td>'.$row['d_rating'].'</td>
                                                    <td>'.$row['d_day_charges'].'</td>
                                                    <td>'.$row['d_evening_charges'].'</td>
                                                    <td> <img class="img-thumbnail img-responsive" width="30" src="assets/img/'.$row['d_image'].'"/></td>
                                                    </tr>';
                                            }

                                            ?>


                                        </tbody>
                                        <caption class="lead"><strong>Dj details : - </strong></caption>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade cst" role="dialog" tabindex="-1" id="view-users">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="success cst">
                                                <th class="ee">U_id </th>
                                                <th class="ee">U_Name </th>
                                                <th class="ee">Phone_no </th>
                                                <th class="ee">Email_id </th>
                                                <th class="ee">Password </th>
                                                <th class="ee">image </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            
                                            $query="select * from user";
                                            $select_query=mysqli_query($connection,$query);
                                            while ($row=mysqli_fetch_assoc($select_query)) 
                                            {
                                                echo'<tr class="active cst">
                                                <td>'.$row['u_id'].'</td>
                                                <td>'.$row['u_name'].'</td>
                                                <td>'.$row['u_phone_no'].'</td>
                                                <td>'.$row['u_email_id'].'</td>
                                                <td>'.$row['u_password'].'</td>
                                                <td> <img class="img-thumbnail img-responsive"  width="30" src="assets/img/'.$row['u_image'].'"></td>
                                                </tr>';
                                            }
                                            ?>

                                        </tbody>
                                        <caption class="lead"><strong>User details : - </strong></caption>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade cst" role="dialog" tabindex="-1" id="b-date-status">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="success cst">
                                                <th id="c1">D_id </th>
                                                <th id="c2">Date </th>
                                                <th id="c3">Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            
                                            $query="select * from booking_dates_status";
                                            $select_query=mysqli_query($connection,$query);
                                            while ($row=mysqli_fetch_assoc($select_query)) 
                                            {
                                                echo'<tr class="active cst">
                                                <td>'.$row['d_id'].'</td>
                                                <td>'.$row['b_avail_date'].'</td>
                                                <td>'.$row['b_status'].'</td>
                                                </tr>';
                                            }
                                            ?>



                                            
                                        </tbody>
                                        <caption class="lead"><strong>Booking Available dates : - </strong></caption>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="add">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="add-dates">
                                <h2 class="text-center">Add new available dates : -</h2>



                                <form method="post" action="" enctype="multipart/form-data">
                                <input class="input-lg cst" type="text" required="" name="dj_id" placeholder="D_id" maxlength="3" minlength="3" pattern="[2][0-9]*">
                                <input class="input-lg cst" type="date" required="" name="dj_date">
                                <input class="input-lg cst" type="text" value="Available" name="dj_status" disabled="" readonly="" required="">
                                <input class="btn btn-primary btn-block btn-lg" name="ghi" value="ADD" type="submit" id="bb" style="margin-top:10px;margin-left:88px;width:100px;">
                                </form>


                                    <?php
                                    if(isset($_POST['ghi']))
                                    {
                                        $did=$_POST['dj_id'];
                                        $dte=$_POST['dj_date'];
                                        $setdate= date('Y-m-d',strtotime($dte));
                        
                                            
                                    $query="insert into booking_dates_status(d_id,b_avail_date,b_status)";
                                    $query.=" values('{$did}','{$setdate}','Available')";
                                    $select_query=mysqli_query($connection,$query);
                                    
                                    }
                                    ?>



                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="adddj">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body" id="add-dates">
                               
                                
                                <h2 class="text-center">Add new dj detais : -</h2>

                                <form method="post" action="" enctype="multipart/form-data">
                                <input class="input-lg cst" type="text" required="" name="dj_name"  placeholder="Dj Name">
                                <input class="input-lg cst" type="text" required="" name="dj_by"  placeholder="Dj By">
                                <input class="input-lg cst" type="text" required="" name="dj_rating"  placeholder="Rating">
                                <input class="input-lg cst" type="tel" required=""   name="dj_phone"    placeholder="Phone Number" maxlength="10" minlength="10" pattern="[1-9][0-9]*">
                                <input class="input-lg cst" type="text" required="" name="dj_dcharge"  placeholder="Day Charges">
                                <input class="input-lg cst" type="text" required="" name="dj_echarge"  placeholder="Evening Charges">
                                <input type="file" required=""  name="dj_image" class="ss">
                                <input class="btn btn-primary btn-block btn-lg" name="def" value="ADD" type="submit" id="bb" style="margin-top:10px;margin-left:88px;width:100px;">
                                </form>


                                    <?php
                                    if(isset($_POST['def']))
                                    {
                                        $name=$_POST['dj_name'];
                                        $by=$_POST['dj_by'];
                                        $rating=$_POST['dj_rating'];
                                        $phone=$_POST['dj_phone'];
                                        $dc=$_POST['dj_dcharge'];
                                        $de=$_POST['dj_echarge'];
                                        
                                        $image_name=$_FILES['dj_image']['name'];
                                        $image_temp=$_FILES['dj_image']['tmp_name'];

                                        move_uploaded_file($image_temp,"assets/img/$image_name");
                                            
                                    $query="insert into dj(d_name,d_by,d_rating,d_image,d_day_charges,d_evening_charges,d_phone_no)";
                                    $query.=" values('{$name}','{$by}','{$rating}','{$image_name}','{$dc}','{$de}','{$phone}')";

                                    $select_query=mysqli_query($connection,$query);
                                    $id=mysqli_insert_id($connection);
                                    }
                                    ?>









                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
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
