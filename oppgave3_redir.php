<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */

function getUserIP() {
    $userIP =   '';
    if(isset($_SERVER['HTTP_CLIENT_IP'])){
        $userIP =   $_SERVER['HTTP_CLIENT_IP'];
    }elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $userIP =   $_SERVER['HTTP_X_FORWARDED_FOR'];
    }elseif(isset($_SERVER['HTTP_X_FORWARDED'])){
        $userIP =   $_SERVER['HTTP_X_FORWARDED'];
    }elseif(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])){
        $userIP =   $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    }elseif(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $userIP =   $_SERVER['HTTP_FORWARDED_FOR'];
    }elseif(isset($_SERVER['HTTP_FORWARDED'])){
        $userIP =   $_SERVER['HTTP_FORWARDED'];
    }elseif(isset($_SERVER['REMOTE_ADDR'])){
        $userIP =   $_SERVER['REMOTE_ADDR'];
    }else{
        $userIP =   'UNKNOWN';
    }
    return $userIP;
}


 if (isset($_POST['username']) && isset($_POST['password']) ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $correct_username = 'admin';
    $correct_password = 'konkurransedyktig';
    $correct_password_encrypted = 'e0ee46c9cdf0a705dd103370cb2a4cf8';
    //error_log(strcmp($username, $correct_username));
    if (strcmp($username, $correct_username) == 0){
        //error_log('Correct username: '. $username);
    }else{
        echo 'Feil brukernavn ' . $username;
        //error_log('Incorrect username: '. $username);
        exit;
    }
    if(strcmp($password, $correct_password) == 0){
        //error_log('Correct password: ' . $password);
        echo 'Success!';
        $IP = getUserIP();
        error_log('POST opg 3 from IP: '. $IP . ' username: '. $username . ' password: '. $password );
        
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