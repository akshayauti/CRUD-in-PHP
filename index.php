<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


    <title>Login</title>
  </head>
  <body>
    <h1 class="text-center animated heartBeat delay-2s infinite">Register Here</h1> 
    <div class="mylogin container">
    	<form action="welcome.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name = "password"placeholder="Password" required>
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">remember me</label>
			  </div>
			  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
			  <!-- <a href="upadate.php"><button action = "update.php" type="button" class="btn btn-primary btn-lg btn-block mt-2">Upadate Password</button></a>
			<a href="delete.php"><button action = "delete.php" type="button" class="btn btn-primary btn-lg btn-block mt-2">Delete Record</button></a>
			<a href="read.php"><button action = "read.php" type="button" class="btn btn-primary btn-lg btn-block mt-2">Display All</button></a> -->
		</form>
		<a href="update.php"><button type="button" class="btn btn-primary btn-lg btn-block mt-2 myupdate">Upadate Password</button></a>
		<a href="delete.php"><button type="button" class="btn btn-primary btn-lg btn-block mt-2 mydelete">Delete Record</button></a>
		<a href="read.php"><button type="button" class="btn btn-primary btn-lg btn-block mt-2 myread">Display All</button></a>


    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>