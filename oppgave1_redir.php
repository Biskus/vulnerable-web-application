<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */




 if (isset($_POST['username']) && isset($_POST['password']) ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    //echo 'Hello ' . $username . $password;
    header('Location: oppgave1_complete.html');
 }else{
     echo 'Ikke prøv deg... :)';
 }
//header('Location: http://www.example.com/');
exit;
?>