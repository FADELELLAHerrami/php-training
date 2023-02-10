

<?php 
    session_start();

    require_once("./inc/config.php");
    require_once("./inc/library.php");
    if(IsAutenthicate()){
        redirect('admin');
        die();
    }

    $status = "";
    if(in_array($_SERVER['REQUEST_METHOD'],['POST'])){
        $email = htmlspecialchars($_POST['email']) ?? '';
        $password = htmlspecialchars($_POST['password']) ?? '';
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(empty($email)){
            $status ="email is required <br />";
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $status .="email is invalid <br />";
        }
        if(empty($password)){
            $status .= "password is required <br />";
        }
        else{
            if(strlen($password <= 8)){
                $status .= "password must be more than 8 characters <br />";
            }
           
            }
        if(empty($status)){
            if(authenticate($email , $password)){
                $_SESSION['email']=$email;
                redirect("admin"); 
                die();
            }
            else{
                $status = "The provided credentals didn't work";
            }
        }
    }
?>







<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">email</label>
                    <input name="email" id="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input name="password" id="password" type="password" class="form-control">
                </div>

                <input type="submit" value="submit" class="btn btn-danger btn-block">

            </form>
            <?php 
            if($status != ""){
                echo $status;
            }
            
              ?>
        </div>
    </div>
</div>