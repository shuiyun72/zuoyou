
<?php 
require_once('init.php');
header('Access-Control-Allow-Origin: http://192.168.10.5:8080');
header('Access-Control-Allow-Origin: *');

$aId = $_REQUEST["aid"];

$sql = "SELECT * FROM jd_addsuc WHERE aid=$aId";
$result=mysqli_query($conn,$sql);
$res = mysqli_fetch_all($result,MYSQLI_ASSOC);
$output=[
	"data"=>$res
];
echo json_encode($output);

?>