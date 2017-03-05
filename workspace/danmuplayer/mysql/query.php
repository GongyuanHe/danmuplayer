<?php 
header('Content-type:text/html;charset=utf8');
$conn = @ mysql_connect("localhost", "root", "") or die("datebase can`t been connected");
mysql_select_db("danmuplayer", $conn);
mysql_query("set names 'utf8'"); //


$sql="SELECT * FROM danmu";
$query=mysql_query($sql); 
//echo $danmu;
echo "[";
$first=0;
while($row=mysql_fetch_array($query)){
	if ($first) {
		echo ",";
		
	}
$first=1;
 // { "text":"颜色代表立场!E.M.T!!!!!!!!!!!!!!!!!!!!!!!" ,color:"white" ,size:1,position:1,time:10}
 //.$row['time'].
 

 
/*
echo "'{\"text\":\"".$row['text']."\",";
echo "color:";
echo "\"".$row['color']."\",size";
echo ":".$row['size'].",position";
echo ":".$row['position'].",time";
echo ":".$row['time']."}'";          */

echo "'".$row['dm']."'";
 

}
echo "]";



?>
