<!doctype html>

<html lang="en">
<body bgcolor="#f4cb42">
<style>

form { width: 200px; }

label { float: left; width: 100px; }

input[type=text] { float: left; 
width: 300px;
height:70px 
}

.clear { clear: both; height: 0; line-height: 0; }

.floatright { float: right; }
button  {
    width: 40%;
    background-color: #000000;
    font-size: 14px;
    color: white;
    padding: 22px 75px;
    margin: 8px auto;
    border: none;
    cursor: pointer;
    
    
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
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>

<h1>Username : <?=$user_data->fname?></h1>


								
<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<form action="index.php?page=tasks&action=save" method="post">

<label for="title">	<b>Title</b>: <input type="text" name="title" id="title" value=""><br><br><br><br>


<b>Body</b>: <textarea rows="10" cols="50"; name="body" id="body" required></textarea>
<br><br>
 
	<label for="isdone"><b>Is Done</b>: <input type="checkbox" name="isdone" id="isdone" value="1"><br><br>
 
     <button type="submit">Submit</button><br>
     
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>
