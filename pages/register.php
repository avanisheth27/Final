<html>

<head>
<body>
<h1 align="center">Sign Up</h1>

<link rel="stylesheet" type="text/css" href="log.css">
</head>

<div class="overall">
<form method = 'post' action = 'index.php'>
<div class="form-input">

<input type="text" name='first_name' placeholder="FIRST NAME"/>
<br>
<input type="text" name="last_name" placeholder="LAST NAME"/>
<br> 
<input type='text' name="email" placeholder="EMAIL ADDRESS"  value=""/>
<br>
<input type="text" name="username" placeholder="USERNAME" value="" />
<br>  
<input type='password' name="password" placeholder="PASSWORD" value=""/>
<br>
<input type='text' name='phone_number' placeholder="PHONE_NUMBER" value=""/>
<br>
<input type='text'name='birthday' placeholder="BIRTHDAY"/>
<br>
<div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>

<br>
<input type="hidden" name="action" value="register">

<input type="submit" value="Register" class="btn-register" />
</form>
</form>
</div>

</body>
</html>

