
<html>
  <head>
    <title>HOME</title>
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <style>
  body{
     background-image:url("bookimg.png");
     size:100%;
     }
   </style>
  </head>
  <body>
    <div class="container">
      <h3>Register</h3>
      <form class="form-horizontal" role="form" method="post" action="process.php">
        <div class="form-group">
          <label for="name" class ="control-label col-sm-2">Name*</label>
          <div class ="col-sm-5">
            <input type="text" id="name" class="form-control" name="name" placeholder="Full Name" required>
          </div>
        </div>
        <div class="form-group">
          <label for="address" class ="control-label col-sm-2">Address*</label>
          <div class ="col-sm-5">
            <input type="text" id="address" class="form-control" name="address" placeholder="Full Address" required>
          </div>
        </div>
         <div class="form-group">
          <label for="email" class ="control-label col-sm-2">E-mail</label>
          <div class ="col-sm-5">
            <input type="email" id="email" class="form-control" name="email" placeholder="abc@xyz.com">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class ="control-label col-sm-2">Password*</label>
          <div class ="col-sm-5">
            <input type="password" id="password" class="form-control" name="password" placeholder="Enter a password" required>
          </div>
        </div>
        <div class="form-group">
          <label for="number" class ="control-label col-sm-2">Contact Number*</label>
          <div class ="col-sm-5">
            <input type="number" id="number" class="form-control" name="number" placeholder="Enter here" required>
          </div>
        </div>
        <input type="submit" name="login_submit">
        </div>
      </form>
    </div>
  </body>
  </html>