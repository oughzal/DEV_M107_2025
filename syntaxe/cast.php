<?php
$x = 1;
var_dump($x);
$y = (float)$x;
// $y = (object) $_GET;
var_dump($y);
printf("%d : %0.2f",$x,$y);
if($y >= $x){
  echo "sup ou égal";  
}
elseif($y >2){

} else{

}
switch($x){
    case 1 : echo "1"; break;
    case 2 : echo "2"; break;
    case 3 : echo "3"; break;
    default : "aucun";
}
for($i=0;$i<=10;$i++){

}
$T = [1, 2, 3, 4];
foreach($T as $e ){

}
$b = is_array($T);
$c = file_get_contents("file1.txt");
?>