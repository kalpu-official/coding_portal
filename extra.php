 <!-- <label >Name </label>  -->
                   <input type="text" name = "name" placeholder="Name"   required>
                           
                            
                                       
            <!-- <label >Email </label> -->
            <input type="email" name = 'email' placeholder="Email"  required><br>
            <!-- <label >Password</label> -->
            <input type="password" name='pass' placeholder="Password"  required><br>
            <!-- <label>Retype password</label> -->
            <input type="password" name='repass'placeholder="Retype password"   required>
            <!-- <label >Contact </label> -->
            <input type="tel" name = "contact" placeholder="Contact No."   required><br>
            <input type="tel" name = "contact" placeholder="Whatsapp No."  ><br>
        
            <label >University </label>
            <select name="univ" id="univ" required style="margin: 10px 10px 10px 10px;border-radius: 25px;width: 68%;padding-right: 20px;/*float:  center;*//*margin-left: 2.5%;*/height: 50px;">
            <option value="None" selected>--Select--</option>
                <option value="GSFC University">GSFC University</option>
                <option value="Others">Others</option>
            </select><br>
            <label >Year of Study </label>
            <select name="yos" id="yos"  style="margin: 10px 10px 10px 10px;border-radius: 25px;width: 60%;padding-right: 20px;/*float:  center;*//*margin-left: 2.5%;*/height: 50px;">
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



<?php 
if(isset($_POST['type_submit'])){
    if(!empty($_POST['type'])){
        echo "<script>document.getElementById('type').style.visibility='hidden';</script>";
    echo "<script>document.getElementById('signupform').style.visibility='visible';</script>";

    }
    else{
        echo "<script>alert('Select one');</script>";
    }
}
?>


<div class="type" id="type" style="height: 240px;width: 100%;
            visibility:visible;">
                <center><p style="font-size:30px;"> Type</p>
                <form method="POST">
                    <input type="radio" name="type"><label>SOLO</label>
                    <input type="radio" name="type"><label>TEAM</label><br>
                    <button type="submit" name="type_submit" style="margin-top: 20px;background:transparent;">
                        <i class="fa fa-arrow-right" aria-hidden="true" style="height: 50px;width: 50px;font-size:50px;"></i>
                    </button>
                </form></center>
            </div>            










            <!-- <img class="image" src="back.jpeg" style="border-radius: 25px;"> -->
        <div class="container-fluid" style="margin-bottom: 10px;">
            <div class="row">
                <div class="col-lg-12">
                    <center>
                    <button class="buttons"  style="width: 45%;cursor:default;" >LOGIN</button>
                    <button class="buttons"  style="width: 45%;"  onclick="signup()">SIGN UP</button>
                    </center>
                </div>  
            </div>      
                <div class="col-lg-12" >
    
                <!-- </div> -->

    <div>
            <!-- <center><h2>LOGIN </h2></center> -->
        <div class ="form_row">
            <div class="form_solo">
                <form action="profile.php" method = "POST"  >
                 
                          <input type="email"  class="fa" name = 'si_email' placeholder="&#xf0e0;   Email"  required><br>
                            <!-- <label >Password</label> -->
                       <input type="password"  class="fa" name='si_pass' placeholder="&#xf023;  Password"  required><br>

                            <button class="sub_button" type="submit" name="signin_submit" >Let's Code</button>
                </form>
             </div>

        </div>
    </div>
    <div class="container-fluid" style="margin-bottom: 10px;">
        <center>
            <button class="buttons"  style="width: 100%;"><a href="#" style="color: #FAE5D3;">Forgot password</a></button>
            <!-- <button class="buttons"  style="width: 45%;"  onclick="signup()"><a href="#" style="color: #FAE5D3;">Create Account</a></button> -->
        </center>

    </div>

</div>
</div>
</div>
</div>
<?php
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
            echo "<script>alert('Something Error Occurred !');</script>";
          }
}
?>

<div class="col-lg-4 col-md-10 box" id="box1" style="display: none; ">
            <img class="image" src="back.jpeg" style="border-radius: 25px;">
            <div>
            <!-- <center><h2>SIGN UP</h2></center> -->

            <div class="container-fluid" style="margin-bottom: 10px;">
    <center>
    <button class="buttons"  style="width: 45%;"  onclick="signin()">LOGIN</button>
    <button class="buttons"  style="width: 45%;cursor:default;">SIGN UP</button>
    </center>

    </div>  
            
        <div class ="form_row" id="signupform"  style="">
            <div class="form_solo">
                <form action="<?PHP  echo $_SERVER["PHP_SELF"]; ?>" method = "POST"  >
                   
            <input type="email" id="su_email"  name ='su_email'  placeholder="Email"  required><br>
            <!-- <label >Password</label> -->
            <input type="password" id="su_pass" name='su_pass' placeholder="Password"  required><br>

            <input type="password" name='su_repass' placeholder="Retype Password"  required><br>
            <div id="type" ></div>
            <center>    
            <button class="form_buttons" id="solo" onclick="select_solo()">SOLO</button>
            <button class="form_buttons" id="team" onclick="select_team()">TEAM</button>
            </center>

           <!--  <input type="radio" name="su_type"  value="solo" style="height: 20px;width: 20px;">Solo
            <input type="radio" name="su_type"  value="team" style="height: 20px;width: 20px;">Team -->

            <!-- <input type="submit" onclick="sendEmail()"  name="signup_submit"> -->
            <button class="sub_button" type="submit" name="signin_submit" onclick="sendEmail()">Smash IT!!</button>
            <!-- <center><a href="#">forgot password</a></center> -->

        </form>
    </div>

</div>
</div>
<!-- <center ><button  class="change"  onclick="signin()" style=""><b>Already signin</b></button> </center> -->
</div>

</div> 
</div>









<div class="col-lg-4 col-md-10 box" id="box1" style="display: none; ">
            <img class="image" src="back.jpeg" style="border-radius: 25px;">
            <div>
            

            <div class="container-fluid" style="margin-bottom: 10px;">
    <center>
    <button class="buttons"  style="width: 45%;"  onclick="signin()">LOGIN</button>
    <button class="buttons"  style="width: 45%;cursor:default;">SIGN UP</button>
    </center>

    </div>  
            
        <div class ="form_row" id="signupform"  style="">
            <div class="form_solo">
                <form action="<?PHP  echo $_SERVER["PHP_SELF"]; ?>" method = "POST"  >
                   
            <input type="email" id="su_email"  name ='su_email'  placeholder="Email"  required><br>
            <!-- <label >Password</label> -->
            <input type="password" id="su_pass" name='su_pass' placeholder="Password"  required><br>

            <input type="password" name='su_repass' placeholder="Retype Password"  required><br>
            <div id="type" ></div>
            <center>    
            <button class="form_buttons" id="solo" onclick="select_solo()">SOLO</button>
            <button class="form_buttons" id="team" onclick="select_team()">TEAM</button>
            </center>

           <!--  <input type="radio" name="su_type"  value="solo" style="height: 20px;width: 20px;">Solo
            <input type="radio" name="su_type"  value="team" style="height: 20px;width: 20px;">Team -->

            <!-- <input type="submit" onclick="sendEmail()"  name="signup_submit"> -->
            <button class="sub_button" type="submit" name="signin_submit" onclick="sendEmail()">Smash IT!!</button>
            <!-- <center><a href="#">forgot password</a></center> -->

        </form>
    </div>

</div>
</div>
<!-- <center ><button  class="change"  onclick="signin()" style=""><b>Already signin</b></button> </center> -->
</div>












@media screen and (max-width: 1200px) {
  body{
        background-image: none;
        background-color: #8DD6E0;

  }
  .box{
    margin-top: 40%;
    border-radius: 25px;
    margin-left:2%;
    background-color: #87BCC3 ;

    padding:50px 10px 0px 10px;
    width: 96%;
    visibility: visible;

  }
  .image{
    display: block;
    border-radius: 25px: 

  }

}












<?php
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
 ?>





 

<?php
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
            echo "<script>alert('Something Error Occurred !');</script>";
          }
}
?>















///////////////////////////////////ALL///////////////////////////////////////////////////

<?php
// include('dbconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Rampart+One&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
<link rel="stylesheet" type="text/css" href="css/main.css">
<style type="text/css">

</style>
</head>
<body style="">

    <div class="container-fluid"  >
<div class="row">
    <!-- <div class="col-lg-8"></div> -->
    <!-- <div class="col-lg-4 col-md-10 box_up" id="box_up1" style=" display: block;"> -->
            <!-- <img class="image" src="back.jpeg" style="border-radius: 25px;"> -->

                <div class="col-lg-4 col-md-10  box_up" style=""  id="box_up1" style=" display: block;">
            <div class="row">
                
                <div class="col-lg-6" id="li_button" style="">
                    <center>
                    <button class="buttons" id="buttons1" style="cursor:default;" >LOGIN</button>
                </center></div>

                <div class="col-lg-6" id="su_button" style=""><center>
                <button class="buttons"  id="buttons2"   onclick="signup()">SIGN UP
                </button>
                    </center>
                </div>
                
                </div>
            <!-- </div>  -->
                </div>  
    <div class="col-lg-4 col-md-10 box" id="box1" style=" display: block;">
                
    
                <!-- </div> -->

    <div>
            <!-- <center><h2>LOGIN </h2></center> -->
        <div class ="form_row">
            <div class="form_solo">
                <form action="profile.php" method = "POST"  >
                 
                          <input type="email"  class="fa" name = 'si_email' placeholder="&#xf0e0;   Email"  required><br>
                            <!-- <label >Password</label> -->
                       <input type="password"  class="fa" name='si_pass' placeholder="&#xf023;  Password"  required><br>

                            <button class="sub_button" type="submit" name="signin_submit" >Let's Code</button>
                </form>
             </div>

        </div>
    </div>
    <div class="container-fluid" style="margin-bottom: 10px;">
        <center>
            <button class="buttons"  style="width: 100%;"><a href="#" style="color: #FAE5D3;">Forgot password</a></button>
            <!-- <button class="buttons"  style="width: 45%;"  onclick="signup()"><a href="#" style="color: #FAE5D3;">Create Account</a></button> -->
        </center>

    </div>

</div>
</div>
</div>




<div class="container-fluid"  >
<div class="row">
    <!-- <div class="col-lg-8"></div> -->

    <div class="col-lg-4 col-md-10  box_up" style=""  id="box_up1" style=" display: block;">
            <div class="row">
                
                <div class="col-lg-6" id="li_button" style="">
                    <center>
                    <button class="buttons"  style=""  id="buttons1"  onclick="signin()">LOGIN</button>
                </center></div>

                <div class="col-lg-6" id="su_button" style=""><center>
                <button class="buttons"  id="buttons2" style="cursor:default;">SIGN UP</button>
                    </center>
                </div>
                
                </div>
            <!-- </div>  -->
                </div>  
                
    
    <div class="col-lg-4 col-md-10 box" id="box2" style=" display: none;">
                
    
                <!-- </div> -->

    <div>
        <div class ="form_row" id="signupform"  style="">
            <div class="form_solo">
                <form action="<?PHP  echo $_SERVER["PHP_SELF"]; ?>" method = "POST"  >
                   
            <input type="email" id="su_email"  name ='su_email'  placeholder="Email"  required><br>
            <!-- <label >Password</label> -->
            <input type="password" id="su_pass" name='su_pass' placeholder="Password"  required><br>

            <input type="password" name='su_repass' placeholder="Retype Password"  required><br>
            <div id="type" ></div>
            <center>    
            <button class="form_buttons" id="solo" onclick="select_solo()">SOLO</button>
            <button class="form_buttons" id="team" onclick="select_team()">TEAM</button>
            </center>

           <!--  <input type="radio" name="su_type"  value="solo" style="height: 20px;width: 20px;">Solo
            <input type="radio" name="su_type"  value="team" style="height: 20px;width: 20px;">Team -->

            <!-- <input type="submit" onclick="sendEmail()"  name="signup_submit"> -->
            <button class="sub_button" type="submit" name="signin_submit" onclick="sendEmail()">Smash IT!!</button>
            <!-- <center><a href="#">forgot password</a></center> -->

        </form>
    </div>

</div>
    </div>
    

</div>
</div>
</div>



</div> 
</div>
<script type="text/javascript">
    
</script> 



<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>

    <script type="text/javascript">
                
    </script> 



</body>
</html>



    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color:white ;
  padding-left: 20px;
  opacity: 0.8; /* Firefox */
}
a{
    text-decoration:none; 
}

    
    .change{
        margin: 15px 10px 20px 10px;
        border-radius: 25px;
        width: 95%;
        
        margin-left: 2.5%;
        height: 50px;
      
         background-color:transparent;
         border-color: #FAE5D3;
         color: white;
    }
    

    .sub_button{
        margin: 15px 10px 20px 10px;
        border-radius: 25px;
        width: 95%;
        
        margin-left: 2.5%;
        height: 50px;
       
         background-color:#FAE5D3;
         border-color: #FAE5D3;
         color: #262262;
         font-size:20px;

    }


    .form_row input{
        margin: 15px 10px 15px 10px;
        border-radius: 25px;

        width: 95%;
        
        margin-left: 2.5%;
        height: 50px;
    
         background-color:transparent;
         border-color: #FAE5D3;
         color: white;

    }

    .type input{
        margin: 10px 10px 10px 10px;
        
        width: 25px;
        
        height: 30px;
        background-color: #ACE9F1 ;

    }
    .type label{
        font-size: 30px;
        margin-left: 2.5%;
    }
    .form_row label{
        font-size: 30px;
        margin-left: 2.5%;
    }
    #gender{
        

    }

    body{
        background-image: url('../images/spell_of_cipher.png');
        background-size: 100% 100vh;
        background-repeat: no-repeat;
    }
    .box{
            
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
            /*border-top-right-radius: 25px;*/

            margin-left: 60%;
            padding:50px 10px 0px 10px;
            visibility: visible;
            background-color:transparent;
            border-left: 2px solid  #FAE5D3; 
            border-right:  2px solid  #FAE5D3; 
            border-bottom: 2px solid  #FAE5D3; 
            /*box-shadow: 0px 20px 0px 10px  #262262;*/
            color: white;


    }

    .box_up{
            margin-top: 10%;
            margin-bottom: 0px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            margin-left: 60%;
            visibility: visible;
            
            background-color:transparent;
           
            color: white;

    }

    .change_button{

    }
    .box.active{
            
            animation: flip 1s;

    }
    
    @keyframes flip{
      0%{
        transform: rotateY(180deg);
        
      }
      100%{
        transform: rotateY(0deg);

      }
      
    }
    .image{
        width: 100%;
        height: auto;
        display: none;
        border-radius: 25px: 
    }



    

h2{
    margin-bottom: 20px;
    font-family: Josefin Sans;
}


#buttons1{
background-color: transparent;
border:none;

color: #FAE5D3;
width: 49%;
height: 70px;

box-shadow: 0px 0px 0px 0px white;

}

#buttons2{
background-color: transparent;
border:none;

color: #FAE5D3;
width: 49%;
height: 70px;
}

#box1{
    /*border-top-right-radius: 25px;*/
}
#li_button{
    border:2px solid white;
    border-top-right-radius: 25px;
    border-bottom: 0px;
    border-top-left-radius: 25px;

    /*box-shadow: 0px 0px 20px 20px  #262262;*/


}

#su_button{
    border-bottom: 2px solid white;
    /*opacity: 0.2;*/
    /*border-bottom-right-radius: 25px;*/

}

#li_button.active{
    border-bottom: 2px solid white;
    /*opacity: 0.2;*/
    /*border-bottom-right-radius: 25px;*/

    


}

#su_button.active{
    border:2px solid white;
    border-top-right-radius: 25px;
    border-bottom: 0px;
    border-top-left-radius: 25px;
    

}



.form_buttons{
         /*background: linear-gradient(to left, #92278f 0%, #262262 100%);*/
         background-color: transparent;
         margin:10px 10px 10px 10px;
         border-radius: 25px;
         height: 40px;
         font-size: 15px;
         width: 40%;
         /*border-color: #92278f;*/
         /*border-color: #FAE5D3;*/
         color: #FAE5D3;
         /*box-shadow: 1px 1px 20px 1px #92278f;*/

}
.form_buttons.active{
         /*background: linear-gradient(to left, #92278f 0%, #262262 100%);*/
         background-color: transparent;
         margin:10px 10px 10px 10px;
         border-radius: 25px;
         height: 40px;
         font-size: 15px;
         width: 40%;
         
         /*border-color: #FAE5D3;*/
         color: #FAE5D3;
         /*box-shadow: 3px 3px 3px 3px #295B80;*/

}








function signup(){
        // console.log('hi');
        document.getElementById('buttons2').style.border = "none";

        document.getElementById('box1').style.display = "none";
        document.getElementById('box_up1').style.display = "none";
        document.getElementById('box2').style.display = "block";
        // document.getElementById('box2').classList.add("active");
        // document.getElementById('box1').classList.remove("active");
        document.getElementById('box_up2').style.display = "block";
        // document.getElementById('buttons2').style.border = "2px solid white";
        // document.getElementById('buttons2').style.borderUp = "2px solid white";
        // document.getElementById('buttons2').style.borderDown = "0px solid white";
        // document.getElementById('buttons2').style.borderRight = "0px solid white";
    document.getElementById('su_button').classList.add("active");
        document.getElementById('li_button').classList.add("active");
        // document.getElementById('buttons1').style.border = "none";
    
    // document.getElementById('buttons2').style.boxShadow = "20px 20px 0px 0px black";
    // document.getElementById('buttons1').style.boxShadow = "20px 20px 0px 0px black";
    }




function signin(){
        document.getElementById('buttons2').style.border = "none";

        // console.log('hi');
        document.getElementById('box_up2').style.display = "none";
        document.getElementById('box_up1').style.display = "block";
        // document.getElementById('box2').classList.remove("active");
        // document.getElementById('box1').classList.add("active");
        document.getElementById('box2').style.display = "none";
        document.getElementById('box1').style.display = "block";

        document.getElementById('li_button').classList.remove("active");
        document.getElementById('su_button').classList.remove("active");
        // document.getElementById('buttons1').style.borderRight = "2px solid white";

    //  document.getElementById('buttons2').style.boxShadow = "20px 20px 0px 0px white";
    // document.getElementById('buttons1').style.boxShadow = "20px 20px 0px 0px white";
    // document.getElementById('buttons1').style.boxShadow = "20px 20px 0px 0px white";

    }



    

function select_solo(){
    document.getElementById('solo').classList.add("active");
    var li = document.getElementById('team');
    if(li.className.search("active")>=0)
    {
        document.getElementById('team').classList.remove("active");
    }


}

function select_team(){

    document.getElementById('team').classList.add("active");
    var l = document.getElementById('solo');
    if(l.className.search("active")>=0)
    {
        document.getElementById('solo').classList.remove("active");
    }
}

 function sendEmail() {
            var name = $("#su_email");
            var email = $("#su_email");
            var subject = $("#su_pass");
            var body = $("#su_email");

            // console.log('hii');
            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }   