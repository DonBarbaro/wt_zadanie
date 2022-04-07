<?php include('connect_db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartphone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile-style.css">
    <script src="zmena_csska.js"></script>
    
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg ">
                <i class="fa fa-mobile-phone" style="font-size:36px"></i>
                <a class="navbar-brand" href="../src/index.html">Mobilne telefóny</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-align-right" style="font-size:28px;color:whitesmoke"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="mr-auto"></div>
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="../src/index.html">Domov <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Smartphony
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item"  href="../src/samsung.html">Samsung</a>
                          <a class="dropdown-item" href="../src/iphone.html">iPhone</a>
                        </div>
                    <li class="nav-item">
                      <a class="nav-link" href="../src/about.html">O mne</a>
                    </li>  
                    <li class="nav-item">
                      <a class="nav-link" href="../src/vypis_udajov.php">Výpis udajov</a>
                    </li>
                  </ul>
                </div>
            </nav>
		</div>
	<main>
  	<form method="post" action="insert.php">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="header">
						  <h2>Registrácia</h2>
						  <p>Vyplň všetky polia</p>
					</div>
					<label for="firstname">Meno:</label> 
					<input class="forml-control" type="text" name="firstname" required>

					<label for="lastname">Priezvisko:</label>
					<input class="forml-control" type="text" name="lastname" required>

					<label for="age">Vek:</label>
					<input class="forml-control" type="text" name="age" required>

					<label for="family">Pribuzenstvo:</label>
					<input class="forml-control" type="text" name="family" required>

					<input type="submit" name="create" value="Zaregistruj ma!">
				</div>
			</div>
		</div>
	  </form>
    </main>
    <div>
    <?php
    if(isset($_POST['create'])){
			$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
      $lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
      $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
      $family = mysqli_real_escape_string($conn, $_REQUEST['family']);
      $sql = "INSERT INTO register (firstname, lastname, age, family) VALUES ('$firstname', '$lastname', '$age','$family')";
      if(mysqli_query($conn, $sql)){
          
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
    }
      mysqli_close($conn);
      ?>
	</div>
        
    <footer>
       <div class="container-fluid p-0">
           <div class="row text-left">
               <div class="col-md-6">
                    <p class="pt-4 text-muted futer">
                        Copyright ©2020 All rights reserved | Tato stranku vytvoril David Ilas 
                    </p>
               </div>
               <div class="col-md-6">

               </div>
           </div>
       </div> 
    </footer>
    <script src="../src/scroll.js"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
