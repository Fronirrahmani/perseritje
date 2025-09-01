<?php
include_pnce('config.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email']
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a User</title>
</head>
<body>
    <form action="add,php" method="POST">
        <input type="text" name="name" placeholder="name">
         <input type="text" name="surname" placeholder="Surname">
          <input type="text" name="email" placeholder="Email">
<button  type="submit" name="submit" placeholder="Email">
</body>
</html>