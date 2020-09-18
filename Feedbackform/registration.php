<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="reg.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
   <h1 id="heading"> Silly Thoughts </h1>
   <p> Hey there!
          We welcome your silliest jokes and appreciate your little suugestion. We definitely hope you are as silly as we are.
          Please show your love from your view.
        </p>

  <div id="regform" > Form </div>
  <hr>
  <div class="sillyform" id="sillystyle">
  <form method="post" action="registration.php" id="in_box">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label><b>Name :</b></label><br>
      <input type="text" name="name" id="name" >
    </div>
    <div class="input-group">
      <label ><b>Email :</b></label><br>
      <input type="email" name="email" id="email"><br>
    </div>
    <div class="input-group">
      <label><b>Any Suggestion / Feedback </b></label><br>
      <input type="text" name="suggestion" id="suggestion">
    </div>
    <div class="input-group">
      <label><b>Any jokes (which can get featured) </b></label><br>
      <input type="text" name="joke" id="joke">
    </div>
    <div class="input-group">
      <div class="btn"> 
      <button type="submit"  name="reg_user" href="#" >Submit</button>
    </div>
  </div>
  </form>
  </div>

</body>
</html>