
<?php
session_start();

$users_list = [

   [ 
    "name"=>"Ahmed",
    "password"=>"admin123",
    "role"=>"administrator",
    "active"=>true
   ],

   [
    "name"=>"Sara",
    "password"=>"pass456",
    "role"=>"trainer",
    "active"=>true
   ],

   [
    "name"=>"Leila",
    "password"=>"test789",
    "role"=>"learner",
    "active"=>false
    ],

    [
    "name"=>"Alae",
    "password"=>"test309",
    "role"=>"learner",
    "active"=>true
    ]
];

function login( $users_list , $userName , $password ){

   foreach($users_list as $user){ 

    if($user["name"] === $userName){


        if(!$user["active"]){
            echo "<p>Account Deactivated</p>";
            return;
        }

        if($user["password"] !== $password){
             echo "<p>Incorrect credentials<p/>";
             return;
        }

        $_SESSION["user_name"] = $userName;
        $_SESSION["role"] = $user["role"];
        header("Location: dashboard.php");
        exit();

        
      }
   }

   echo "<p>User does not exist</p>";
}

if($_SERVER["REQUEST_METHOD"] === "POST"){

   login($users_list ,$_POST["username"] , $_POST["password"] );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
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