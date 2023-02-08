

<?php

function authenticate($email,$password){
    return ($email === EMAIL && $password == PASSWORD);
}


function redirect($page){
    return header("Location:$page.php");
}


function IsAutenthicate(){
    return isset($_SESSION['email']);
}

function ensureUserIsAutenthicate(){
    if(!IsAutenthicate()){
        redirect('login');
        die();
    }
}
?>