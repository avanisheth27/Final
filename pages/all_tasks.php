<!doctype html>

<html lang="en">

<body bgcolor="#f4cb42">
<style>
input {
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

</style>
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




<div>


<button onclick ="window.location.href='index.php?page=accounts&action=all'">My Profile</button><br>


<button onclick ="window.location.href='index.php?page=tasks&action=create'">Add Todos</button><br>


<button onclick ="window.location.href='index.php?page=accounts&action=logout'">Logout</button><br>

</div>

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
