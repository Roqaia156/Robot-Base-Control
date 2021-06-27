
<?php
include "index.html" ;
$Robotbase1= mysqli_connect("localhost","root","") or die(mysqli_error($Robotbase1));
mysqli_select_db($Robotbase1 , "robotbase")or die(mysqli_error($Robotbase1));

if(isset($_POST["forward"])){
    mysqli_query($Robotbase1,"insert into basecontrol values('forward')");
}
if(isset($_POST["left"])){
    mysqli_query($Robotbase1,"insert into basecontrol values('left')");
}
if(isset($_POST["right"])){
    mysqli_query($Robotbase1,"insert into basecontrol values('right')");
}
if(isset($_POST["backward"])){
    mysqli_query($Robotbase1,"insert into basecontrol values('backward')");
}
if(isset($_POST["stop"])){
    mysqli_query($Robotbase1,"insert into basecontrol values('stop')");
}

?>