


<?php    

   $users_list = [ 
      [ 
        "name" => "Ahmed", 
        "password" => "admin123", 
        "role" => "administrator", 
        "active" => true 
      ], 
      
      [
        "name" => "Sara", 
        "password" => "pass456", 
        "role" => "trainer", 
        "active" => true 
      ], 
      
      [
        "name" => "Leila", 
        "password" => "test789", 
        "role" => "learner", 
        "active" => false 
      ], 
      
      [
        "name" => "Alae", 
        "password" => "test309", 
        "role" => "learner", 
        "active" => true 
      ] 
    ];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
         
       if(!empty($_POST["username"])){
          $userName = $_POST["username"];
       }

       if(!empty($_POST["password"])){
          $password = $_POST["password"];
       }

       for( $i ; $i < count($users_list) ; $i++){
           echo $userName[$i];
       }

       header("location: login.php");
       exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div>
   <form action="" method="post">

       <label for="username">Username</label>
      <input type="text" name="username">

      <label for="password">Password</label>
      <input type="password" name="password">
      
      <button type="submit" name="login" value="Login"></button>

   </form>

   </div>


</body>
</html>