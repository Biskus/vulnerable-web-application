<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */




 if (isset($_POST['username']) && isset($_POST['password']) ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $correct_username = 'admin';
    $correct_password = 'FlyingBeaverIzAwezum123';
    $correct_password_encrypted = 'Rmx5aW5nQmVhdmVySXpBd2V6dW0xMjM=';
    if (strcmp($username, $correct_password) !== 0 && 
    strcmp($password, $correct_password !== 0)){
        echo 'Success!';
        header('Location: oppgave2_complete_zjry48fgldo.html');
        exit;
    }
    echo 'Ikke prøv deg...';
    exit;
 }else{
     echo 'Ikke prøv deg... :)';
     exit;
 }
//header('Location: http://www.example.com/');
exit;
?>