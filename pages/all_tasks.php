<!doctype html>

<html lang="en">
	<body bgcolor="#f4cb42">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

   
</head>

<body>
<h1 align="left"><u><b>Todo Task Manangement</b></u></h1>
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>

<h1>Username : <?=$user_data->fname?></h1>



<form action="index.php?page=accounts&action=all" method="GET">
<button type="submit">My Profile</button>
</form>


<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=create">Add Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<?php
//this is how you print something
if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'Data not found';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>
