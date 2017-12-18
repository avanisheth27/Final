<!doctype html>

<html lang="en">

<style>
form {
    border: 0px solid #f1f1f1;
}

body {
   
   background-color:#f4cb42;
}

input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 08px auto;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button  {
    width: 20%;
    background-color: #000000;
    font-size: 12px;
    color: white;
    padding: 12px 20px;
    margin: 8px auto;
    border: none;
    cursor: pointer;
    width: 30%;
    
}

button:hover {
    opacity: 0.8;
}
.container {
    margin: 0 175px;
    padding: 16px;
}
</style>
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <h1 align="left"><u><b>Todo Task Manangement</b></u></h1>

    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    
</head>

<body>
<div class = "overall">




<form action="index.php?page=accounts&action=login" method="POST">
<div class="form-input">
        <div class="center">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br>
        </div>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br>
<br>
        
        <button type="submit">Login</button>
    </div>
</form>
<h1><a href="index.php?page=accounts&action=register"><font color="black"> New User, Register Now ! </font></a></h1>
</div>

<script src="js/scripts.js"></script>
</body>
</html>