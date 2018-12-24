content
<?php  
$con=mysqli_connect("127.0.0.1","root","1234","otokaji");  

mysqli_set_charset($con,"utf8");  

if (mysqli_connect_errno($con))  
{  
   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
$id = $_POST['id'];  
$title = $_POST['title']; 
$date = $_POST['date'];  
$content = $_POST['content'];  
$photo = $_POST['photo'];  


$result = mysqli_query($con,"insert into content (id,title,date,content,photo) values ('$id','$title','$date','$content','$photo')");  
  
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
         Title: <input type = "text" name = "title" />
         Date: <input type = "text" name = "date" />
         Content: <input type = "text" name = "content" />
 	 Photo: <input type = "text" name = "photo" />
         <input type = "submit" />
      </form>
   
   </body>
</html>