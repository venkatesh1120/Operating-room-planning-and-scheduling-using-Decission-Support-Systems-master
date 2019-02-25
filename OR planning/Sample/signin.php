<?php
include('signinval.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
//header("location: Home.php");
}
?>
<html>
    <head>
       
   
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
  
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <ul id="dropdown1" class="dropdown-content">
  <li><a href="signin.php">Sign in</a></li>
  <li><a href="selection.html">Sign up</a></li>
 
</ul>
<nav>
  <div class="nav-wrapper">
            <a href="index.html" class="brand-logo"><img src="a.png" width=45%; heigth=50px; /></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="index.html">Home</a></li>
    
       
              
        
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
      </head>
	  
	  
	  
	  
	  
          <body>
 <form action="" method="post">
 <div align="center" style="margin-top:30px; align:center;">
 <table style="width:50%; height:20%; margin-left:25%; margin-top:3%;">
 <tr><td colspan=2 style="width:50%;"><center><h5>Login</h5></center></td></tr>
 <tr><td style="width:50%;">User Name:</td><td>
    <input type="text" name="username" placeholder="Username" id="username" /><span id="userid" style="color: red;"></span></td></tr>
   <tr><td>Password:</td><td> <input type="password" name="password" placeholder="Password" id="password" onfocus="a()" /><span id="pwdid" style="color: red;"></span></td></tr>
  <tr><td colspan=2> <input name="submit" type="submit" value=" Login "></td></tr>
   <span><?php echo $error; ?></span></table>
       
     
      

</div>
            
        </form>
        
        </body>

<footer class="page-footer" style="margin-top:150px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Decision Support Systems</h5>
                <p class="grey-text text-lighten-4">Here you can find the help and our rules for privacy!!!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul style="
    height: 60px;
    width: 1650px;
">
                  <li><a class="grey-text text-lighten-3" href="Contactus.html">Contact Us     </a></li>
                   
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/DSSOR.planning/?skip_nax_wizard=true">Facebook       </a></li>
              
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">© 2015 Decision Support Systems Inc. All Rights Reserved.
        </div>
          </div>
        </footer>




      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script type="text/javascript" src="js/materialize.min.js"></script>
      </html>