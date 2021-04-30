

<?php
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'contact'; 
$link = mysqli_connect($host, $user, $password, $db);
?>

<?php

    if(isset($_POST['login'])){
        $usernmae=$_POST['user'];
        $password=$_POST['pass'];

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            $username = $_POST['user'];
            $password = $_POST['pass'];
                
                //read from database
               
                $query = "select * from useradmin where uName = '$username' limit 1";
                
                $result = mysqli_query($link, $query) or die(mysqli_error());
    
                if($result)
                {
               
                    if($result && mysqli_num_rows($result) > 0)
                    {
               
                        $data = mysqli_fetch_assoc($result);
                        
                        if($data['uPass'] === $password)
                        {   
                   
                            $_SESSION['user_id'] = $data['user_id'];
                            header("Location: dataViewPage.php");
                            die;
                        }
                    }
                }
                
                echo "wrong username or password!";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <section class="container" style="margin-top: 6rem; padding-left: 5rem;">
    <div class="row text-center" >
        <div class="col-sm2">
            <div class="card left-card-body">
                <div class="card-body text-light">

                    <div class="left-card-topper">
                        <h2>Sky View Resort</h2>
                    </div>

                    <div class="left-card-lower">

                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg> Address</h4>
                        <p> Plot 88, Sajek <br> Bangadesh</p>

                        <h4>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                              </svg>
                            Contact</h4>
                        <p>01745896523</p></div>
              
                </div>
            </div>
        </div>

        <div class="col-sm2 text-center">   
            <div class="card right-card-body">
                <div class="form-body">
                    <div class="card-body">
                      
                        <form class="container mt-5"; method="POST">
                            <div class="form-group">
                                
                            <input type="text" class="form-control" id="uname" name="user" aria-describedby="emailHelp" placeholder="user name">
                    
                            </div>
                            <div class="form-group">
                            
                                <input type="password" class="form-control" id="upass" name="pass" placeholder="Password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                            <div class="container text-right">
                            <a href="contactForm.php">Contact US</a>
                            </div>
                        </form>
      
                    </div>
                   

                </div>
            </div>
        </div>
    </div>
  
    </section>

    
</body>
</html>
