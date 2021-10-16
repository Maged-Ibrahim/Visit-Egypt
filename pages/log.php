
<?php
header('Location: main.html');
$connect= new mysqli('localhost', 'root','', 'login');

 if($connect->connect_error){
  die('connection failed');
  
 } else
 echo 'connection ...';
 $username= $_POST{'username'};
 $password= $_POST{'password'};
 echo "<br>". "$username";

 $sql="SELECT name FROM users WHERE username='$username' AND password='$password'";
 
 $result= $connect->query($sql);
 
 if($result-> num_rows>0){
  
  while($row=$result->fetch_assoc() ){
   echo "<br>"."Connection: Worked "."<br>" ."User:". $row["name"];
    echo "<a href='".main.html."'>link</a>";
  }
  }
 
?>