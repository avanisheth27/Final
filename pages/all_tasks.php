<!doctype html>

<html lang="en">
<body bgcolor="#f4cb42">
<style>
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



<button onclick = "window.location.href='index.php?page=tasks&action=all'"> Todos </button><br>
<button onclick = "window.location.href='index.php?page=accounts&action=logout'"> Logout </button>



<?php
//this is how you print something
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<script src="js/scripts.js"></script>
</body>
</html>
