<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body>

<div class="col-lg-4 box">
	<img class="image"   src="images/spell_of_cipher.png">
	<div class="container-fluid title_buttons">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-6" id="li_button"  onclick="login()">
				<center>LOGIN</center>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-6" id="su_button"  onclick="signup()">
				<center>SIGN UP</center></div>
		</div>
	</div>
	<div>
	<center>
		<form class="form" id="form1"  action="profile.php" method = "POST"  >
			
				 <input type="email"  class="fa" name ='si_email' placeholder="&#xf0e0;  Email"  required><br>
			         <!-- <label >Password</label> -->
            <input type="password"  class="fa" name='si_pass' placeholder="&#xf023;   Password"  required><br>

            <button class="sub_button" type="submit" name="signin_submit" >Let's Code</button>
        </form>

        <form class="form" id="form2"  method = "POST"   onsubmit="sendEmail()">
			
			<input type="email"  id="su_email" class="fa" name ='su_email' placeholder="&#xf0e0;  Email"  required><br>
			
			         <!-- <label >Password</label> -->
            <input type="password"  id="su_pass" class="fa" name='su_pass' placeholder="&#xf023;   Password"  required><br>

            <input type="password"  class="fa" name='su_repass' placeholder="&#xf023;   Retype  Password"  required><br>
          

            <input id="su_type" name="su_type" hidden>
            <center>    
            <button type="button" class="form_buttons" id="solo" onclick="select_solo()">SOLO</button>
            <button type="button" class="form_buttons" id="team" onclick="select_team()">TEAM</button>
            </center>
           

            <button class="sub_button" type="submit" name="signup_submit" >Smash IT!!</button>
        </form>
    </center>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="js/main.js"></script>
<script type="text/javascript">

</script>
</body>
</html>



<?php
include('dbconnect.php');





 if(isset($_POST['signin_submit']))
        {
// $price = mysql_query("SELECT price FROM products WHERE product = '$product'");
// $result = mysql_fetch_array($price);
        $mail=$_POST['si_email'];
        $sql1 = "SELECT  pass FROM  credentials_info where email='$mail' ";
             $query1 = mysqli_query($GLOBALS['conn'], $sql1);
        // echo $query1;
             while($user = mysqli_fetch_array($query1))
                    {
                        if($_POST['si_pass']!=$user['pass']){
                            echo "<script>alert('USER Name or password    wrong');</script>";
                        }else{
                                header('Location: ./profile.php');
                            // session_start();
                                $_SESSION['user_email'] = "hiii";
                            // echo "<script>alert('congratulation');</script>";
                        }
                     }
        }



if(isset($_POST['signup_submit']))
{
if ($_POST['su_pass']!=$_POST['su_repass']){

    echo "<script>alert('Password and Retype password must be same');</script>";
    $pass=false;
}
else{
    $pass=true;
}
if (!empty($_POST['su_type'])){
    
    $type=true;
}
else{
    $type=false;
   
    echo "<script>alert('Select Solo or team');</script>";
}
}
if(isset($_POST['signup_submit']) and  $type=="true" and $pass=="true"){
     $sql2 = "INSERT into credentials_info values ('".$_POST['su_email']."','".$_POST['su_pass']."','".$_POST['su_type']."')";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
          $query2 = mysqli_query($GLOBALS['conn'], $sql2);

          if($query2) {
            // header('Location: ./admin.php');
            echo "<script>alert('Sign UP Successfully '); </script>";
          } else {
          
            echo "<script>alert('Sorry ,Email has been used.Enter onther one !');</script>";
          }
}






?>