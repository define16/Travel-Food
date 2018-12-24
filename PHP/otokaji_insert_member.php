members
<?php  
$con=mysqli_connect("127.0.0.1","root","1234","otokaji");  

mysqli_set_charset($con,"utf8");  

if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
$id = $_POST['id'];  
$password = $_POST['password']; 
$name = $_POST['name'];  
$year = $_POST['year'];  
$month = $_POST['month'];  
$day = $_POST['day'];  
$gender = $_POST['gender'];  
$phone = $_POST['phone'];  
$profilephoto = $_POST['profilephoto'];   
$mainphoto = $_POST['mainphoto'];   

$result = mysqli_query($con,"insert into members (id,password,name,year,month,day,gender,phone,profilephoto,mainphoto) values ('$id','$password','$name','$year','$month','$day','$gender','$phone','$profilephoto','$mainphoto')");  
  
  if($result){  
    echo 'success';  
  }  
  else{  
    echo 'failure';  
  }  
  
mysqli_close($con);  
?> 



<html>
 <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         ID: <input type = "text" name = "id" />
         Password: <input type = "text" name = "password" />
         name: <input type = "text" name = "name" />
         year: <input type = "text" name = "year" />
         month: <input type = "text" name = "month" />
         day: <input type = "text" name = "day" />
         gender: <input type = "text" name = "gender" />
         phone: <input type = "text" name = "phone" />
         profilephoto: <input type = "text" name = "profilephoto" />
 	 mainphoto: <input type = "text" name = "mainphoto" />
         <input type = "submit" />
      </form>
   
   </body>
</html>