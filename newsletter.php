<?php
    header("location:index.html");
    $con = mysqli_connect('localhost', 'root', 'imtrying');
    mysqli_select_db($con, 'artdatabase');

    $email = $_POST['inputEmail'];
    
    $reg = "INSERT INTO newsletter(email) VALUES ('$email')";
    

    mysqli_query($con, $reg);

?>