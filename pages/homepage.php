<!doctype html>

<html lang="en">
<style>
form {
    border: 0px solid #f1f1f1;
}

body {
   margin: 0 auto;
background-repeat: no-repeat;
background-size: 100% 1000px;
   background-color: #42f4aa;
}
overall{
width: 100px;
height: 100px;
text-align: center;
background-color: rgba(52,73,94,0.7);
border-radius: 4px;
margin: 0 auto;
margin-top: 100px;
}

input[type="text"],input[type="password"] {
height: 45px;
width: 300px;
font-size: 15px;
margin-top: 30px;
background-color: #fff;
padding-lefit: 10px;
}

button {
margin-top: 5px;
font-size: 20px;
width: 340px;
padding: 15px 30px;
color: #fff;
border-radius: 10px;
border: none;
cursor: pointer;
background-color: #8878cc;
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

    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    
</head>

<body>
<div class = "overall">




<form action="index.php?page=accounts&action=login" method="POST">
<div class="form-input">
    
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br>
<br>
        <button type="submit">Login</button>
    </div>
</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>
</div>

<script src="js/scripts.js"></script>
</body>
</html>