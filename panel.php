<?php include "db.php";
session_start();
if($_SESSION["username"] === 'admin' && $_SESSION["password"] === 'root'){
    if(isset($_POST['button']) && $_POST['name'] !== '' && $_POST['text'] !== '' && $_POST['price'] !== '' && $_POST['picture'] !== ''){
        $name = $_POST['name'];
        $text = $_POST['text'];
        $price = $_POST['price'];
        $picture = $_POST['picture'];
        $name = mysqli_real_escape_string($connection, $name);
        $text =   mysqli_real_escape_string($connection, $text);
        $price = mysqli_real_escape_string($connection, $price);
        $picture = mysqli_real_escape_string($connection, $picture);
        $query = "INSERT INTO productadd(name, text, image, price)";
        $query .= "VALUES ('$name', '$text', '$picture', '$price')";
    
       $result =  mysqli_query($connection, $query);
        if(!$result) {
          die('Query FAILED' . mysqli_error($connection));
      }
        else {
          echo "<script>alert('Product has been Added!')</script>";
        }
      }
      if(isset($_POST['butt']) && $_POST['id'] !== ''){
        $id = $_POST['id'];
        $id = mysqli_real_escape_string($connection, $id);
        $query = "DELETE FROM productadd WHERE id = $id";
       $result =  mysqli_query($connection, $query);
        if(!$result) {
          die('Query FAILED' . mysqli_error($connection));
      }
        else {
            echo "<script>alert('Product has been deleted!')</script>";
      }
      }
      if(isset($_POST['butth']) && $_POST['idw'] !== ''){
        $id = $_POST['idw'];
        $name = $_POST['namew'];
        $text = $_POST['textw'];
        $price = $_POST['pricew'];
        $picture = $_POST['picturew'];
    
        $id = mysqli_real_escape_string($connection, $id);
        $name = mysqli_real_escape_string($connection, $name);
        $text = mysqli_real_escape_string($connection, $text);
        $price = mysqli_real_escape_string($connection, $price);
        $picture = mysqli_real_escape_string($connection, $picture);
    
        $query = "UPDATE productadd SET ";
        $query .= "name = '$name',";
        $query .= "text = '$text',";
        $query .= "price = '$price',";
        $query .= "image = '$picture' ";
        $query .= "WHERE id =  $id";
        
    
         $result =  mysqli_query($connection, $query);
        if(!$result) {
          die('Query FAILED' . mysqli_error($connection));
      }
        else {
            echo "<script>alert('Product has been edited!')</script>";
      }
      }
    
    
    ?>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    
    
    body {
    }
    
    .login-page {
      flex-wrap: wrap;
        display:flex; flex-direction: row; justify-content: center; margin-top:50px;
    }
    .form {
      display: block; 
      border-radius: 50px;
    box-shadow:  20px 20px 60px #bebebe,
                 -20px -20px 60px #ffffff;
      position: relative;
      z-index: 1;
      background: ;
      max-width: 360px;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
    }
    .form input {
      
      border-radius: 24px;
    box-shadow:  15px 15px 31px #d0d0d0,
                 -15px -15px 31px #ffffff;
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    }
    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: #363636;
      width: 100%;
      border: 0;
      padding: 15px;
      color: #FFFFFF;
      font-size: 14px;
      -webkit-transition: all 0.3 ease;
      transition: all 0.3 ease;
      cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
      background: #4F4F4F;
    }
    .form .message {
      margin: 15px 0 0;
      color: #b3b3b3;
      font-size: 12px;
    }
    .form .message a {
      color: #4F4F4F;
      text-decoration: none;
    }
    .form .register-form {
      display: none;
    }
    .container {
      position: relative;
      z-index: 1;
      max-width: 300px;
      margin: 0 auto;
    }
    .container:before, .container:after {
      content: "";
      display: block;
      clear: both;
    }
    .container .info {
      margin: 50px auto;
      text-align: center;
    }
    .container .info h1 {
      margin: 0 0 15px;
      padding: 0;
      font-size: 36px;
      font-weight: 300;
      color: #1a1a1a;
    }
    .container .info span {
      color: #4d4d4d;
      font-size: 12px;
    }
    .container .info span a {
      color: #000000;
      text-decoration: none;
    }
    .container .info span .fa {
      color: #EF3B3A;
    }
    body {
      background-image: url("http://dallevas.com/site/wp-content/uploads/2013/12/Black-Background-Pattern.jpg");
      background-size:100% 100%;
    -webkit-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    -khtml-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    }
    </style>
    
    <center><h1 style="font-size:50px;
    text-shadow: 4px -4px 8px #a8a8a8,
    -4px 4px 8px #ffffff;">🔒 ADMIN PANEL 🔒</h1><center>
    <div class="login-page">
      <div class="form">
    
      <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post" action="">
          <h2>add product</h2>
          <input type="text" name="name" placeholder="name"/>
          <input type="text" name="text" placeholder="description"/>
          <input type="number" name="price" placeholder="price ($)"/>
          <input type="text" name="picture" placeholder="picture"/>
          <input type="submit" value="Add product" name="button"><br><br>
        </form>
      </div>
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post" action="">
          <h2>Delete product</h2>
          <input type="number" name="id" placeholder="ID"/>
          <input type="submit" value="Delete product" name="butt"><br><br>
        </form>
      </div>
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>Edit</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post" action="">
          <h2>Update product</h2>
          <input type="number" name="idw" placeholder="ID"/>
          <input type="text" name="namew" placeholder="name"/>
          <input type="text" name="textw" placeholder="description"/>
          <input type="number" name="pricew" placeholder="price"/>
          <input type="text" name="picturew" placeholder="picture"/>
          <input type="submit" value="Update product" name="butth"><br><br>
        </form>
      </div>
      <br>
    
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>Edit</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post" action="">
          <h2>Fetch product data</h2>
          <input type="number" name="ido" placeholder="ID"/>
          <input type="submit" value="Fetch" name="butto"><br><br>
          <?php
            if(isset($_POST['butto']) && $_POST['ido'] !== ''){
              $id = $_POST['ido'];
              $query = "SELECT * FROM productadd WHERE id = " . $id;
              $result = mysqli_query($connection, $query);
              
              if(!$result) {
                  die('Query FAILED' . mysqli_error($connection));
              }
          
              while($row = mysqli_fetch_assoc($result)){
                print_r($row);
                }
              }
              ?>
    
        </form>
      </div>
      <br>
    
    </div>
    <script>
    </script>
    <center><h2><a href="remove_session.php" style="color:black">LOG-OUT</a></h2></center>

    <?php
}

else {
    $url='http://localhost/ecommerce/admin.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>