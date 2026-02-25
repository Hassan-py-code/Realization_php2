


<?php    
   session_start();
   
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
         
   $userName = $_POST["username"];
   $password = $_POST["password"];

   foreach($users_list as $El_user){

       if($El_user["name"] === $userName){

           if($El_user["password"] === $password && $El_user["active"] === true){

               $_SESSION["user_name"] = $userName;
               $_SESSION["role"] = $El_user["role"];

               header("Location: dashboard.php");
               exit();
           }

           elseif($El_user["password"] === $password && $El_user["active"] === false){
               echo "<p>Account Deactivated</p>";
               exit();
           }

           else{
               echo "<p>Incorrect credentials</p>";
               exit();
           }
       }
   }


   echo "<p>Incorrect credentials</p>";
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
      <input type="text" name="username" required>

      <label for="password">Password</label>
      <input type="password" name="password" required>
      
      <button type="submit" name="login" value="Login"></button>

   </form>

   </div>


</body>
</html>