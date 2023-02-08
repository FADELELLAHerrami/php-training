<?php 
   
    $myName = $_POST['fullName'];
    $myAge = $_POST['age'];
?>
<?php include('./inc/header.php') ?>
<h2><?php echo $myName?></h2>
<p><?php echo $myAge?></p>
<div class="container">
    <div class="row">
        <form action="confirmation.php" method="post">
            <div class="form-group">
                <label for="">Your Name</label>
                <input name='fullName' type="text" class="from-control">
                <label for="">Your Age</label>
                <input name='age' type="text" class="from-control">
            </div>
            <button type="submit" class="btn btn-block btn-success">envoyer</button>
        </form>
    </div>
</div>

<?php include('./inc/footer.php') ?>