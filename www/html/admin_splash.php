<?php 
 session_start();
?>
<?php
include './models/db_connect.php';
?>
<?php
include './models/db_functions.php';
?>
<?php 
if (!isset($_SESSION['username'])) {
    $arr = adminLogin($_POST['admin-email-login'],$_POST['admin-password-login'] );
//$result = pg_prepare($db, "admin_query", "SELECT * FROM admin WHERE admin_email = lower($1) AND admin_password = crypt($2, admin_password)");
//$result = pg_execute($db, "admin_query", array($_POST['admin-email-login'], $_POST['admin-password-login']));

//$arr = pg_fetch_all($result);

if (!empty($arr)){
    
    $_SESSION['admin'] = 'TRUE';
    $_SESSION['user_info'] = $arr;
}
}
if (empty($arr)){
    $_SESSION['login-status'] = 'INCORRECT CREDENTIALS';
}

?>

<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="main.js"></script>
</head>
<body>


    <?php require_once 'header.php' ?>




<?php 
    if ($_SESSION['login-status'] == 'INCORRECT CREDENTIALS' ) { ?>
        <div class="container">
        <h1>INCORRECT LOGIN</h1>
        <h3><a href="admin_login.php">Try Again?</a></h3>

    <?php } ?>

<?php if ($_SESSION['admin'] == "TRUE") { ?>
    <div class="container">
    <h1>Admin sheeeeet</h1>

<?php } ?>
    </body>
    </html>
