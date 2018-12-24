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
 
 
$res = mysqli_query($con,"select * from content");  
   
$result = array();  
   
while($row = mysqli_fetch_array($res)){  
  array_push($result,  
    array('id'=>$row[0],'title'=>$row[1],'date'=>$row[2],'content'=>$row[3], 'photo'=>$row[4]
    ));  
}  
   
 
header('Content-Type: application/json; charset=utf8');
$json = json_encode(array("result"=>$result),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
echo $json;
 
   
mysqli_close($con);  
   
?>