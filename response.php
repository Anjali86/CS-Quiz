<?php session_start(); ?>

<?php
$from_time1 = date('y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];

$_SESSION['$from_time1']=$from_time1;

$timefirst=strtotime($_SESSION['$from_time1']);
$timesecond=strtotime($to_time1);

$differenceinsecond= $timesecond - $timefirst;

$time_lapse=gmdate("i:s", $differenceinsecond); 

if($time_lapse=='00:00')
{  
unset(
        $_SESSION['start_time'],
        $_SESSION['end_time']
,
        $_SESSION['duration']
,$_SESSION['$from_time1']
);

echo "Time Out";
header('Location: final.php');
}
else
{
echo $time_lapse;
}
// if($differenceinsecond==0){
    
//     session_abort();
//     echo gmdate("i:s",0);
    
// }else{
//     echo gmdate("i:s", $differenceinsecond);
// }
    
?>