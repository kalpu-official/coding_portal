<?php
include('dbconnect.php');
// $email=$_POST['si_email'];
// echo $email,$_SESSION["email"];
if(isset($_POST['prof_submit']))
		{
 $sql2 = "INSERT into profile_info values ('".$_POST['name']."','".$_POST['contact']."','".$_POST['wpcontact']."','".$_POST['univ']."','".$_POST['yos']."','".$_POST['gender']."','".$_POST['dob']."','".$email."')";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
          $query2 = mysqli_query($GLOBALS['conn'], $sql2);

          if($query2) {
            // header('Location: ./admin.php');
            echo "<script>alert('Sign UP Successfully '); </script>";
          } else {
            echo "<script>alert('Something Error Occurred !');</script>";
          }
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	 input{
		margin: 10px 10px 10px 10px;
		border-radius: 25px;
		width: 95%;
		/*float:  center;*/
		margin-left: 2.5%;
		height: 50px;
        background-color: #ACE9F1 ;
	}
	select{
		margin: 10px 10px 10px 10px;
		border-radius: 25px;
		width: 95%;
		/*float:  center;*/
		margin-left: 2.5%;
		height: 50px;
        background-color: #ACE9F1 ;
	}
	label{
		margin: 10px 10px 10px 10px;
		border-radius: 25px;
		width: 95%;
		/*float:  center;*/
		margin-left: 2.5%;
		height: 50px;
        /*background-color: #ACE9F1 ;*/
	}
	</style>
</head>
<body>

<form method="POST">
	<center><i class="fa fa-user-circle-o" aria-hidden="true"  style="font-size:10em; "></i>
		</center>
	 <!-- <label >Name </label>  -->
                   <input type="text" name = "name" placeholder="Name"   required><br>
                           
                            
                                       
           <!--  <label >Email </label>
            <input type="email" name = 'email' placeholder="Email"  required><br>
            <label >Password</label>
            <input type="password" name='pass' placeholder="Password"  required><br>
            <label>Retype password</label> -->
            <!-- <input type="password" name='repass'placeholder="Retype password"   required> -->
            <!-- <label >Contact </label> -->
            <input type="tel" name = "contact" placeholder="Contact No."   required><br>
            <input type="tel" name = "wpcontact" placeholder="Whatsapp No."  ><br>
        
            <label >University </label>
            <select name="univ" id="univ" required style="border-radius: 25px;width: 68%;padding-right: 20px;/*float:  center;*//*margin-left: 2.5%;*/height: 50px;">
            <option value="None" selected>--Select--</option>
                <option value="GSFC University">GSFC University</option>
                <option value="Others">Others</option>
            </select><br>
            <label >Year of Study </label>
            <select name="yos" id="yos"  style="border-radius: 25px;width: 60%;padding-right: 20px;/*float:  center;*//*margin-left: 2.5%;*/height: 50px;">
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
            </select><br>
            <label>Gender </label><br>
            <input type="radio" name="gender" id="gender" value = "Male" style="width: 20px;height: 20px;"> <label >Male</label><br>
            <input type="radio" name="gender" id="gender" value="Female" style="width: 20px;height: 20px;"> <label >Female</label><br>
            <input type="radio" name="gender" id="gender" value = "RNS"  style="width: 20px;height: 20px;"> <label >Rather not to say</label><br>
            <!-- <label>DOB </label> -->
            <input type="date" name="dob"   required><br>

            <input type="submit" name="prof_submit">
</form>
</body>
</html>