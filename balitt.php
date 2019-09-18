
<title> WebDav Checker by KkK1337 </title>

<body background="http://wallpoper.com/images/00/26/31/65/green-grunge_00263165.jpg">

<center>

<br />

<img src="http://i.imgur.com/FhXlngS.png"><br />

<font face='Comic Sans MS' color='green'> <br />

Scan for websites with dir webdav

<br /></font>

<br />

<form method="post">

<textarea name="sites" cols="80" rows="10">

http://www.example.com/

</textarea><br>

<input type="submit" name="go" value="Start Scan" />

</form>

<center>

<style type="text/css">

    textarea{

            font-size: 15px;

            font-family: Tahoma;

            color: #00FF00;

            background-color: transparent;

            border: dashed 1pt #00FF00;

            }

    input{

           color: #00FF00;

           background-color: transparent;

           border: dotted 1pt #00FF00;

         }

</style>



<?php



set_time_limit(0);

error_reporting(0);

$a=$_POST['go'];

$b=$_POST['sites'];



if($a){

  $target=explode("\n",$b);

  foreach($target as $mnc){

    if (preg_match ("/WebDAV testpage/i", @file_get_contents("$mnc/webdav/index.html")))

    {

       echo "<center><font face='Comic Sans MS' color='red'>".$mnc."</font> <font color='white'>--></font> </font><font face='Comic Sans MS' color='lime'>infected</font></center>";

        $ux = "".$mnc."\r\n"; 

        $save=fopen('result.txt','ab'); 

        fwrite($save,"$ux");

    }else{

      echo "<center><font face='Comic Sans MS' color='red'>".$mnc."</font> <font color='white'>--></font> </font><font face='Comic Sans MS' color='red'>Error</font></center>";

    }

    echo '<br><font color="white">I finish,Check result.txt</font>';

  }

}





?>
