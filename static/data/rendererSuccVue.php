
<?php 
require_once('init.php');
header('Access-Control-Allow-Origin: http://192.168.10.5:8080');
header('Access-Control-Allow-Origin: *');

$sql1 = "SELECT * FROM jd_addsuc WHERE afl=1 LIMIT 1,4";
$result1=mysqli_query($conn,$sql1);
$res1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);

$sql2 = "SELECT * FROM jd_addsuc WHERE afl=2 LIMIT 1,4";
$result2=mysqli_query($conn,$sql2);
$res2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);

$sql3 = "SELECT * FROM jd_addsuc WHERE afl=3 LIMIT 1,4";
$result3=mysqli_query($conn,$sql3);
$res3 = mysqli_fetch_all($result3,MYSQLI_ASSOC);

$sql4 = "SELECT * FROM jd_addsuc WHERE afl=4 LIMIT 1,4";
$result4=mysqli_query($conn,$sql4);
$res4 = mysqli_fetch_all($result4,MYSQLI_ASSOC);


$output=[
	"data"=>["aa1"=>$res1,"aa2"=>$res2,"aa3"=>$res3,"aa4"=>$res4]
];
echo json_encode($output);

?>