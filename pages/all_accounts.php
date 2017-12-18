<!doctype html>

<html lang="en">
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
	
	
<form action="index.php?page=tasks&action=all" method="GET">
<button type="submit">Todos</button>
</form>

<form action="index.php?page=accounts&action=logout" method="GET">
<button type="submit">Logout</button>
</form>

<?php
//this is how you print something
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<script src="js/scripts.js"></script>
</body>
</html>
