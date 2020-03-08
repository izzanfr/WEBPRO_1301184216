<?php
session_start();
include('connection.php');
    $new_name = $_POST['name'];
    $new_website = $_POST['website'];
    $new_bio = $_POST['bio'];
    $new_email = $_POST['email'];
    $new_nohp = $_POST['phone'];
    $new_gender = $_POST['gender'];
    $queryUpdate = "UPDATE profile SET name = '".$new_name."', bio = '".$new_bio."', email = '".$new_email."', nohp = '".$new_nohp."', gender = '".$new_gender."', website = '".$new_website."' WHERE username = '".$_SESSION['username']."'";

    if(mysqli_query($conn,$queryUpdate))
    {
        $_SESSION["name"] = $new_name;
        $_SESSION["website"] = $new_website;
        $_SESSION["bio"] = $new_bio;
        $_SESSION["email"] = $new_email;
        $_SESSION["nohp"] = $new_nohp;
        $_SESSION["gender"] = $new_gender;
        $_SESSION["email"] = $new_email;
        header("location:profile.php");
    } else {
        
    }
?>