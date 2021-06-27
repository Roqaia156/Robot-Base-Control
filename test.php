
<?php
include "index.html" ;
$Robotarm1= mysqli_connect("localhost","root","") or die(mysqli_error($Robotarm1));
mysqli_select_db($Robotarm1 , "robotbase")or die(mysqli_error($Robotarm1));

if(isset($_POST["forward"])){
    mysqli_query($Robotarm1,"insert into basecontrol values('forward')");
}
if(isset($_POST["left"])){
    mysqli_query($Robotarm1,"insert into basecontrol values('left')");
}
if(isset($_POST["right"])){
    mysqli_query($Robotarm1,"insert into basecontrol values('right')");
}
if(isset($_POST["backward"])){
    mysqli_query($Robotarm1,"insert into basecontrol values('backward')");
}
if(isset($_POST["stop"])){
    mysqli_query($Robotarm1,"insert into basecontrol values('stop')");
}

?>