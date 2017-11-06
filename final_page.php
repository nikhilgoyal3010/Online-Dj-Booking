<?php

  include("checkLogin.php");
   include 'connect.php';
                                    if(isset($_POST['xxx']))
                                   {

                                   		$id_dj=$_SESSION['id_dj'];
                                   		$name_dj=$_SESSION['name_dj'];
                                        $d=$_POST['radio_dates'];
                                        $a=$_POST['amt'];
                                        $m=$_POST['mode'];
                                        $u_contact=$_SESSION['user_phone'];

                                            $query="select * from user where u_phone_no=$u_contact";
                                            $select_query=mysqli_query($connection,$query);

                                            while($row=mysqli_fetch_assoc($select_query))
                                            {
                                                $u_id=$row['u_id'];
                                            }

                                        // echo "$d";
                                        // echo "$a";
                                        // echo "$m";
                                        // echo "$id_dj";
                                        // echo "$name_dj";
                                        // echo "$u_contact";
                                        // echo "$u_id";

                                     $query1="insert into booking_details(u_id,d_id,u_phone_no,d_name,b_date,b_payment_mode,b_payment_amt)";
                                     $query1.=" values('{$u_id}','{$id_dj}','{$u_contact}','{$name_dj}','{$d}','{$m}','{$a}')";
                                     $select_query1=mysqli_query($connection,$query1);
                                    
                                    

                                    $query2="delete from booking_dates_status where b_avail_date='$d' AND d_id=$id_dj";
                                    $select_query2=mysqli_query($connection,$query2);
                                    }
                                      
                                        
                                    ?>
                                   





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>final_page</title>
</head>
<body>
<center>
	<h1 style="margin-top:100px;font-size:50px">Congratulation Your Booking is Confirmed...!!!</h1>
	<a href="user_view.php"><h2>Click to view booking details</h2></a>
</center>
</body>
</html>

<?php
	unset($_SESSION['dj_id']);
	unset($_SESSION['dj_name']);
?>
