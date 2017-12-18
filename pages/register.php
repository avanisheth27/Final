<!doctype html>
<html lang="en">
<body bgcolor="#f4cb42">
<style>
form {
    border: 0px solid #f1f1f1;
}
.container {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 60px;
    margin-left: 10px;
    padding: 16px;
    text-align: center;

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
    
</style>
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<h1 align="center"><u><b>Todo Task Manangement</b></u></h1>

<div class= "container">
<form action="index.php?page=accounts&action=register" method="post">
   <table align ="center">
<tr>
   <td>
    <b>First name :</td> <td><input type="text" name="fname" placeholder="First name" minlength="1" required></b><br><br></td></tr>
    <tr>
    <td> <b>Last name</b>: </td>  <td><input type="text" name="lname"placeholder="Lastname" minlength="1" required><br><br></td></tr>
    <tr>
    <td> <b>Email</b> :</td>  <td><input type="email" name="email" placeholder="Username"required><br><br></td></tr>
    <tr>
    <td> <b>Phone</b>: </td> <td><input type="tel" name="phone"placeholder="1234567890" required><br><br></td></tr>
    <tr>
    <td> <b>Birthday</b>:</td> <td> <input type="date" name="birthday" placeholder="yyyy-mm-dd" required><br><br></td></tr>
    <tr>
    <td> <b>Gender</b>:</td>  <td><input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br><br></td></tr>
    <tr>
   <td>  <b>Password</b>: </td> <td><input type="password" name="password" minlength="6" required><br><br></td></tr>
   </table>
    <input type="submit" value="Submit form">
</form>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
