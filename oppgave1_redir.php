<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */




 if (isset($_POST['username']) && isset($_POST['password']) ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $correct_username = 'admin';
    $correct_password = 'HvitTigerErBest123';
    error_log('1 username: '. $username);
    error_log('1 password: '. $password);
    if (strcmp($username, $correct_username) === 0 && 
    strcmp($password, $correct_password) === 0){
        error_log('succes '. $password );
        echo 'Success!';
        header('Location: oppgave1_complete.html');
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