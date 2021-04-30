
<?php
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'contact'; 
$link = mysqli_connect($host, $user, $password, $db);
?>


<?php
    $srl=1;
    while($srl<=100){
        $sNo = $srl;

        $sql = 'select * from testdb where id ='.$sNo;
        $result = mysqli_query($link, $sql) or die(mysqli_error());


        $noOfData = mysqli_num_rows($result);

        while($row = mysqli_fetch_row($result)){
            print_r($row);
            echo"<br>";
        }
        $srl++;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataView Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

</body>
</html>