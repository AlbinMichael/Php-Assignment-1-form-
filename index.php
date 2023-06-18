<!DOCTYPE>
  <html lang="en-US">
    <head>
      <meta charset="utf-8"/>
      <title>signup page</title>
      <meta name="author" content="Albin"/>
      <meta name="description" content="sign in with database"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
      <header>
        <?php
      include("./global_header.php")
  
      ?>
      </header>
    <main>
<p>Already have an account?<a href="#" class="sign_in">sign in</a></p>
  <div class="container"> 
    <form class="row g-3" method="POST">
     <div class="col-md-6">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" id="inputEmail4">
  </div>
      <div class="col-md-6">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" id="inputEmail4">
  </div> 
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="inputEmail4" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="inputPassword4" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" name="inputCity" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Province</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Ontario</option>
      <option>Quebec</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="inputZip" id="inputZip">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign up</button>
  </div>
</form>
  </div>
    </main>
        <?php
        require_once("./connection.php");
        if(isset($_POST) & !empty($_POST)){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['inputEmail4'];
            $address= $_POST['inputAddress'];
            $password= $_POST['inputPassword4'];
            $city= $_POST['inputCity'];
            $zip= $_POST['inputZip'];
        
            $res = $database->create($fname,$lname,$email,$address,$city,$zip);
        if($res){
            echo "<p>entry created</p>";
        }
        else{
            echo "<p> entry not created</p>";
        }
        }
        ?>
  </body>
</html>