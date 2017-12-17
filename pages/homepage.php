<!doctype html>

<html lang="en">
<style>
form {
    border: 0px solid #f1f1f1;
}

body {
   
   background-color: #42f4aa;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 08px 0;
    display: inline-block;
    background:  ;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button  {
    background-color: #000098;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
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
    <h1 align="center">Todo Task Manangement</h1>
<h2 align="center">Login</h2>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    
</head>

<body>
<div class = "overall">




<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<script src="js/scripts.js"></script>
</body>
</html>