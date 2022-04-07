<?php include('connect_db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartphone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
 
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
                    <div class="mr-auto">
                </div>
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
                  </ul>
                </div>
            </nav>
        </div>
        <form action="vypis_udajov.php" method="post">
            <input class="button" type="submit" name='show' value="Ukaž celý zoznam">
            <input type="submit" name="show_name" value="Ukaž mená">
            <input type="submit" name="show_lastname" value="Ukaž priezviská">
            <input type="submit" name="show_age" value="Ukaž vek">
            <input type="submit" name="show_family" value="Ukaž pribuzenstvo">
        </form>
        <div class="container">
            <?php
            if(isset($_POST['show'])){
            $sql = "SELECT * FROM register";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Meno</th>";
                            echo "<th>Priezvisko</th>";
                            echo "<th>Vek</th>";
                            echo "<th>Pribuzenstvo</th>";
                        echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['firstname'] . "</td>";
                            echo "<td>" . $row['lastname'] . "</td>";
                            echo "<td>" . $row['age'] . "</td>";
                            echo "<td>" . $row['family'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    mysqli_free_result($result);
                    }else{
                        echo "No records matching your query were found.";
                    }
                    }else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    } 
                }
            if(isset($_POST['show_name'])){
                $sql = "SELECT id, firstname FROM register";
                if($result1 = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result1) > 0){
                        echo "<table>";
                            echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Meno</th>";
                            echo "</tr>";
                        while($row1 = mysqli_fetch_array($result1)){
                            echo "<tr>";
                                echo "<td>" . $row1['id'] . "</td>";
                                echo "<td>" . $row1['firstname'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_free_result($result1);
                        }else{
                            echo "No records matching your query were found.";
                        }
                        }else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                        } 
                    }
                if(isset($_POST['show_lastname'])){
                    $sql = "SELECT id, lastname FROM register";
                        if($result2 = mysqli_query($conn, $sql)){
                            if(mysqli_num_rows($result2) > 0){
                                echo "<table>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Priezvisko</th>";
                                    echo "</tr>";
                                while($row2 = mysqli_fetch_array($result2)){
                                    echo "<tr>";
                                        echo "<td>" . $row2['id'] . "</td>";
                                        echo "<td>" . $row2['lastname'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                mysqli_free_result($result2);
                                }else{
                                    echo "No records matching your query were found.";
                                }
                                }else{
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                } 
                            }
            if(isset($_POST['show_age'])){
                $sql = "SELECT id, age FROM register";
                    if($result3 = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result3) > 0){
                            echo "<table>";
                                echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Meno</th>";
                                echo "</tr>";
                            while($row3 = mysqli_fetch_array($result3)){
                                echo "<tr>";
                                    echo "<td>" . $row3['id'] . "</td>";
                                    echo "<td>" . $row3['age'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result3);
                            }else{ 
                                echo "No records matching your query were found.";
                            }
                            }else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                            } 
                }
                if(isset($_POST['show_family'])){
                    $sql = "SELECT id, family FROM register";
                        if($result4 = mysqli_query($conn, $sql)){
                            if(mysqli_num_rows($result4) > 0){
                                echo "<table>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Pribuzenstvo</th>";
                                    echo "</tr>";
                                while($row4 = mysqli_fetch_array($result4)){
                                    echo "<tr>";
                                        echo "<td>" . $row4['id'] . "</td>";
                                        echo "<td>" . $row4['family'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                mysqli_free_result($result4);
                                }else{ 
                                    echo "No records matching your query were found.";
                                }
                                }else{
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                } 
                    }
              
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
