<?php include "db.php";
if(isset($_POST['submit'])){
$username = $_POST['user'];
$password = $_POST['pass'];
session_start();
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($connection, $username);  
$password = mysqli_real_escape_string($connection, $password); 
$_SESSION["username"] = $username;
$_SESSION["password"] = $password; 

$sql = "select * from admin where username = '$username' and password = '$password'";  
$result = mysqli_query($connection, $sql);  
$count = mysqli_num_rows($result);  

if($count){  
    $url='http://localhost/ecommerce/panel.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}  
else{  
    echo "<script>alert('Invalid username or password.')</script>";  
}     

}
?>
<body>
    <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #ebf5fc;
}
.form {
  position: relative;
  width: 350px;
  padding: 40px 40px 60px;
  border-radius: 10px;
  background: #ebf5fc;
  text-align: center;
  box-shadow: -5px -5px 15px rgba(255, 255, 255, 0.8),
    5px 5px 10px rgba(0, 0, 0, 0.1);
}
.form h2 {
  color: #32a3b1;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 4px;
}
.form .input {
  margin-top: 40px;
  text-align: left;
}
.form .input .inputBox {
  margin-top: 20px;
}
.form .input .inputBox label {
  display: block;
  color: #868686;
  margin-bottom: 5px;
  font-size: 18px;
}
.form .input .inputBox input {
  width: 100%;
  height: 50px;
  color: #32a3b1;
  background: #ebf5fc;
  border: none;
  outline: none;
  border-radius: 40px;
  padding: 5px 15px;
  font-size: 18px;
  box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 1),
    inset 2px 2px 6px rgba(0, 0, 0, 0.1);
}
.form .input .inputBox input[type="submit"] {
  margin-top: 20px;
  box-shadow: -2px -2px 6px rgba(255, 255, 255, 1),
    2px 2px 6px rgba(0, 0, 0, 0.1);
}
.form .input .inputBox input[type="submit"]:active {
  color: #006c9c;
  margin-top: 20px;
  box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 1),
    inset 2px 2px 6px rgba(0, 0, 0, 0.1);
}
.form .input .inputBox input::placeholder {
  color: #bdcada;
  font-size: 18px;
}
.forget {
  margin-top: 30px;
  color: #555;
}
.forget a {
  color: #ff0047;
}

}

    </style>

            <form method="post" action="">
  <div class="form">
  <h2>Login</h2>
  <div class="input">
    <div class="inputBox">
      <label>Username</label><br>
      <input type="text" placeholder="Username" name="user">
    </div>
    <div class="inputBox">
      <label>Password</label><br>
      <input type="password" placeholder="······" name="pass">
    </div>
    <div class="inputBox">
      <input type="submit" value="Signin" name="submit">
    </div>
  </div>
</div>
             </form>
		</div>
	</div>
</body>
  