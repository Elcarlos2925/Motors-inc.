<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$FontAwesome_css $Style_css $Sig_In_css $Bootstrap_4_6_0_css";?>
    <title>Sig In</title>
</head>
<body>
    <form action="" class="form-sigin">
    <img id='logo' src='../static/assets/img/logo.jpeg' width='200px'>
        <div class="form-group col-md-8">
            
            <div class="form-row">
                <label for="">Enter a user name</label>
                <input type="text" placeholder="user name" class="form-control">
            </div>
            <div class="form-row">
            <label for="">Enter first Name(s)</label>
                <input type="text" placeholder="name(s)" class="form-control">
            </div>
            <div class="form-row">
                <label for="">Enter last Name</label>    
                <input type="text" placeholder="last name" class="form-control">
            </div>
            
            <div class="form-row">
                <label for="">Create a password</label>
                <input type="password" placeholder="password" class="form-control">
            </div>
            <div class="form-row">
                <label for="">Confirm password</label>
                <input type="password" placeholder="confirm password" class="form-control">
            </div>
            <div class="form-row">
                <button class="form-control  btn-info">Sig In</button>
            </div>
        </div>
    </form>
</body>
</html>