<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: Home.php");
}
?>
<html>
    <head>
       
    <link rel="stylesheet" type="text/css" href="login.css">
        <script>
            function valid(){
            var x = document.getElementById('username').value;
            var y = document.getElementById('password').value;
            if(x.length< 1 && y.length< 1)
                {
                    document.getElementById('username').style.borderColor = 'red';
                    document.getElementById('password').style.borderColor = 'red';
	               document.getElementById('userid').innerHTML = 'Please enter your username ';   
                    document.getElementById('pwdid').innerHTML = 'Please enter your password ';                    

                    return false;
                }
            else if(x.length< 1){
                    document.getElementById('username').style.borderColor = 'red';
                	document.getElementById('userid').innerHTML = 'Please enter your username ';   
                    return false;
            }else if(y.length<1){
                    document.getElementById('password').style.borderColor = 'red';
                    document.getElementById('pwdid').innerHTML = 'Please enter your password ';                    

                return false;
            }else  {
                                    return true;
               
            }
            }
            function a(){
                 var x = document.getElementById('username').value;
                if(x.length< 1){
                    document.getElementById('username').style.borderColor = 'red';
                	document.getElementById('userid').innerHTML = 'Please enter your username';
                    }else{
                    document.getElementById('username').style.borderColor = 'grey';
                	document.getElementById('userid').innerHTML = ' ';
                    }
                    }
        </script>
    </head>
   <body  style="background-image: url('bg.jpg'); background-size:cover;background-repeat:no-repeat;background-position: center center;">
    
<div  id="login-box">
  <div class="center">
  <h1>Sign in</h1>
      
    <form method="post" onSubmit="return valid();" action="" >
    <input type="text" name="username" placeholder="Username" id="username" /><span id="userid" style="color: red;"></span>
    <input type="password" name="password" placeholder="Password" id="password" onfocus="a()" /><span id="pwdid" style="color: red;"></span>
   <input type="submit" name="signinsub" value="Sign in" />
    <a  class="waves-effect waves-light btn-large" href="signup.html">Sign Up</a> 

            
        </form>
  </div>
  <div class="right">
<!--
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
-->
  </div>
  
</div>
    </body>
</html>