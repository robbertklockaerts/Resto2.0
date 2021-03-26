<!doctype html>
<html lang="en">

<head>

    <title>"Contact"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    
    <script src="https://kit.fontawesome.com/770384ac45.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
 

</head>


 <body class="container bg-image" style=" width: 100%; height: auto;">

        <header class=" bg-light m-1 p-1">
      

            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <div class="d-flex justify-content-start offset-2 ">
                       <img src="./bunny eating.jpg" class="rounded-pill" width="120px" alt="bunny eating"></a>
                        </div>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarMenu">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link m-auto" href="index.html">Welcome</a>
                        <a class="nav-item nav-link m-auto" href="menu.php">Menu</a>
                        <a class="nav-item nav-link m-auto" href="pictures.html">Pictures</a>
                        <a class="nav-item nav-link m-auto" href="restaurant.html">Restaurant</a>
                        <a class="nav-item nav-link m-auto active" aria-current="page" href="contact.php">Contact</a>
                        <a class="nav-item nav-link m-auto" href="guestbook.php">Guestbook</a>
                        
                    </div>
                </div>
            </nav>
        </header>

        
<section class="section pb-5">


  <h2 class="section-heading h1 pt-4 text-white text-center">Contact us</h2>
  
  <div class="row">

    
    <div class="col-8 offset-2">

      
      <div class="card">

        <div class="card-body">
          
          <div class="form-header">
            <h3><i class="fas fa-envelope-square"></i> Write to us:</h3>
          </div>
          <hr> 
          <?php 

            $msg ="";
            if(isset($_GET['error']))
            {
              $msg = "Please Fill in the Blanks";
              echo '<div class ="alert alert-danger">'.$msg.'</div>';
            }

            ?>

          <p>Also for reservations.</p>
          <br>

          <form action= "process.php" method="post">
          <div class="md-form">
            <label for="form-name">First Name</label>
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" name="firstname" id="form-name" class="form-control">
        
          </div>

          <div class="md-form">
            <label for="form-name">Last Name</label>
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" name="lastname" id="form-name" class="form-control">
        
          </div>
          <div class="md-form">
            <label for="form-email">Your email</label>
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" name="email" id="form-email" class="form-control">
          
          </div>
         

          

          <div class="md-form">

            <select class="form-select mt-3 mb-1" aria-label="Default select example">

              <option selected>Subject of Message</option>
              <option value="1">reservations</option>
              <option value="2">information</option>
              <option value="3">other</option>
            </select>
  
          </div>

          <div class="md-form">
            <label for="form-Subject">Message</label>
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" name="message" class="form-control md-textarea" rows="3"></textarea>
            
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-light-blue" type ="submit" name="submit">Submit</button>
          </div>

        </form>
        </div>

      </div>
      
            <br>
      <form action="backmessages.php" method="post">
                <p>
                    admin: acces
                <input type="password" name="pass"/>
                <input type="submit" value="Enter"/>
                </p>
            </form>
    </div>
    <?php
// connecting to the database
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// $reponse->closeCursor();

?>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>
</body>


</html>
