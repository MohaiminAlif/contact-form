
<?php
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'contact'; 
$link = mysqli_connect($host, $user, $password, $db);
?>

<?php 
    
    
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {   
        
            $userFName = $_POST['fName'];
            $userLName = $_POST['lName'];
            $userCon = $_POST['contact'];
            $userEmail = $_POST['email'];

            if(!empty($userFName) && !empty($userLName) && !empty($userCon) && !empty($userEmail))
            {
            
                //save to database
        
                $query = "insert into testdb (fName, lName, contact, email) 
                values ('$userFName','$userLName','$userCon','$userEmail')"; 

                if(mysqli_query($link, $query)){
                    
                    header("Location: confirmPage.html");
                }
                else{
                    echo"Not Done";
                }

                
            }
            else
            {
                echo "Please enter some valid information!";
            }
        }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct Page</title>

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
                        <h2>Contact Form</h2>
                      
                            <form action=""; method="POST">
                                <div class="row name-row my-4">
                                <div class="col">
                                    
                                    <input type="text" class="form-control" name = "fName" placeholder="First name">
                                </div>

                                <div class="col">
                                    <input type="text" class="form-control" name="lName" placeholder="Last name">
                                </div>
                                </div>

                            
                                <div class="row number-row my-4">
                                
                                    <div class="col mt-2 ">
                                    <input type="text" class="form-control" name="contact" placeholder="Contact Number">
                                    </div>

                                </div>
    
                                <div class="row number-row my-4">
                                
                                    <div class="col mt-2">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>

                                </div>
                                <div class="col-auto my-4">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                  </div>
                            </form>
                            <a href="adminPage.php">Changed my mind</a>
                            
                        </div>
                   

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    
</body>
</html>

