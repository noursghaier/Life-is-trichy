<!DOCTYPE html>
<html lang="en">

  <head>
      <link rel="icon"  
      href="res/logo.png">

      <title>Life is trichy</title>
      <meta charset="utf-8">
	  
	 

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
  <link href="css/style.css" rel="stylesheet">
  
  
  <style>
   input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
          }

          input[type=email], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
          }
		  input[type=password], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
          }
          
          input[type=submit] {
            background-color: rgb(247, 245, 151);
            color: black;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
			display: block;
    margin-left: auto;
    margin-right: auto
          }
          
          input[type=submit]:hover {
            background-color: #dcfbffec;
          }
          
          #form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
			margin-top: 130px;
          }
  
  </style>
  
    </head>
    <body> 
	<!--navbar-->

<div class="container">
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm fixed-top transparent">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <!-- Logo Image -->
                <img src="res/logo.png" width="30" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold">Life is trichy</span>
            </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="index.php#1" class="nav-link">Trich</a></li>
                    <li class="nav-item"><a href="index.php#2" class="nav-link">Mental Health</a></li>
                    <li class="nav-item"><a href="index.php#3" class="nav-link">Contact Us</a></li>
					<li class="nav-item"><a href="shareyourstory.php" class="nav-link">Share your story</a></li>
                </ul>

                

            </div>


        </div>
    </nav>
</div>



</div>

<div class="container">
    
    <form id="form" action="signup.inc.php" method="POST">
	<h3>Signup</h3>
        <input type="text" name="username" placeholder="Username.." >

        <input type="email" name="mail" placeholder="E-mail.." >
        <input type="password" name="pwd" placeholder="Password.." >
          <input type="password" name="pwd-repeat" placeholder="Repeat password..">

        <input type="submit" name="signup-submit" value="Signup">
    </form>
</div>

</body>
</html>