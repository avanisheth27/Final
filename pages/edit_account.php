<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <body bgcolor="#f4cb42"><style>
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




<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <button type="submit">Submit</button>
</form>

<a href="index.php?page=accounts&action=all"><button type="button">Back</button></a>

<script src="js/scripts.js"></script>
</body>
</html>
