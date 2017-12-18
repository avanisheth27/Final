<!doctype html>

<html lang="en">
<body bgcolor="#f4cb42">
<style>
form {
    border: 0px solid #f1f1f1;
}



body {
   
   background-color:;
}


.container 
   {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 60px;
    margin-left: 10px;
   
    
    width: 20%;
    padding: 22px 30px;
    margin: 45px auto;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


}

</style>
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1 align="left"><u><b>Todo Task Manangement</b></u></h1>

<div class= "container">
<form action="index.php?page=accounts&action=register" method="post">

    First name: <input type="text" name="fname" placeholder="first name"required><br><br>
    Last name: <input type="text" name="lname"placeholder="lastname" required><br><br>
    Email or username: <input type="email" name="email" placeholder="username"required><br><br>
    Phone: <input type="tel" name="phone"placeholder="phone no" required><br><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Submit">
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
