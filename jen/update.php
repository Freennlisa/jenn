<?php
    include "conn.php";

    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM tbl_list WHERE id =' $ref_id'");

    while($d=mysqli_fetch_object($getdata)){
        $fname = $d -> fn;
        $lname = $d -> ln;
        $sec = $d -> sec;

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

    <style>
{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body {
    background: url('img/OIP.jfif');
    background-size: cover;
}

.login-form {
    padding: 80px;
    background-color: brown;
    opacity: 0.8;
    border-radius: 50px;
    width: 350px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: white;
}

.login-form h1 {
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}

.login-form p {
    font-size: 20px;
    margin: 15px 0;
}

.login-form input {
    font-size: 16px;
    width: 100;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}

.login-form button {
    font-size: 18px;
    font-weight: bold;
    margin: 20px 0;
    width: 30%;
    border-radius: 5px;
    border: 0;
    padding: 10px 15px;
}

</style> 
</head>
<body>
    <center>
    <form action="process.php" method = "POST">
    <label>Firstname: </label> </br>
    <input type="text" name="update_fn" value="<?php echo $fname;  ?>"required></p>

    <label>Lastname: </label> </br>
    <input type="text" name="update_ln" value="<?php echo $lname;  ?>"required></p>

    <label>Section: </label> </br>
    <input type="text" name="update_sec" value="<?php echo $sec;  ?>"required></p>

    <input type="submit" name="update_student" value="UPDATE">
    </center>
    
</body>
</html>