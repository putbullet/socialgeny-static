<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //somthing was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')"
        mysqli_query($con, $query);
         
         header("Location: LOGIN.php");
         die;


    }else{
    echo "Please Enter some valid informatons !";
    }
}
?>



<html lang="en-US" style="font-size: 100%; --saturation-factor: 1; --devtools-sidebar-width: 0px;" class="full-motion disable-forced-colors theme-dark platform-web font-size-16" data-rh="lang,style,class">

<head>

    <meta charset="utf-8">
    <title>Signup From Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">


<body>
    <div 
        class="Loginbox">
        <img src="avatar.gif" class="avatar">

        <h1>SIGNUP NOW</h1><br>

        <form method="post">

            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username"><br>
            <p>password</p>
            <input type="password" name="password" placeholder="Enter password"><br>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation"
            name="password_confirmation">

            <input type="submit" name="" value="Signup">
            <a  href="LOGIN.html">LOGIN</a>
            
            
        </form>
    </div>
    

</body>


</head>



</html>

