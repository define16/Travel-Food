<?php  
function unistr_to_xnstr($str){ 
    return preg_replace('/\\\u([a-z0-9]{4})/i', "&#x\\1;", $str); 
} 
 
$con=mysqli_connect("127.0.0.1","root","1234","otokaji");  
 
if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
 
 
mysqli_set_charset($con,"utf8");  
 
 
$res = mysqli_query($con,"select * from members");  
   
$result = array();  
   
while($row = mysqli_fetch_array($res)){  
  array_push($result,  
    array('id'=>$row[0],'password'=>$row[1],'name'=>$row[2],'year'=>$row[3], 'month'=>$row[4], 'day'=>$row[5], 'gender'=>$row[6],'phone'=>$row[7], 'profilePhoto'=>$row[8], 'mainphoto'=>$row[9]
    ));  
}  
   
 
header('Content-Type: application/json; charset=utf8');
$json = json_encode(array("result"=>$result),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
echo $json;
 
   
mysqli_close($con);  
   
?>