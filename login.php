<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&family=Staatliches&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>3AS Research Solutions</title>
    
        </head>
        <body>
        <header>
        <nav>
        <div class="logo">
          <img src="logo1.jpg" alt="" />
        </div>
        <ul>
          <li><a href="login.php">LogIn Page</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <div class="search">
          <input type="text" name="" id="" placeholder="Search here..." />
          <button class="btnn">Search</button>
        </div>
      </nav>
</header>

<main>

            <div class="container center-div shadow ">
            
                <div class="heading text-center mb-5 text-uppercase text-white">LOGIN PAGE</div>
               
                <div class="container mb-5 d-flex justify-content-center">
                
                    <div class="admin-form shadow p-2">
                        <form class="form-inline" action="logincheck.php" method="POST">
                             <div class="form-group">
                                 <label>Email ID</label>
                                 <input type="text" name="user" value="" class="form-control" ">
                             </div>
                             <div class="form-group">
                                 <label>Password</label>
                                 <input type="text" name="pass" value="" class="form-control" ">
                                </div>
                                <br>
                                <input type="submit" class="btn btn-success text-center" name="submit">
                             </div>
                            </div>
                            
                            
                        </form>
                    </div>
</main>


    
    
    
    
    
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>