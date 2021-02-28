<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */




 if (isset($_POST['username']) && isset($_POST['password']) ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $correct_username = 'admin';
    $correct_password = '1234567890';
    $correct_password_encrypted = 'Rmx5aW5nQmVhdmVySXpBd2V6dW0xMjM=';
    //error_log(strcmp($username, $correct_username));
    if (strcmp($username, $correct_username) == 0){
        error_log('Correct username: '. $username);
    }else{
        echo 'Feil brukernavn ' . $username;
        error_log('Incorrect username: '. $username);
        exit;
    }
    if(strcmp($password, $correct_password) == 0){
        error_log('Correct password: ' . $password);
        echo 'Success!';
        header('Location: oppgave3_complete_khhfyenkfi.html');
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