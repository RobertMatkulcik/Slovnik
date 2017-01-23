<?php
/**
 * Created by PhpStorm.
 * User: hlbinamyslenia
 * Date: 1/12/17
 * Time: 11:02 PM
 */

$login = 'admin';
$password = 'r00t';

?>

<html>
<head>
    <title>PHP form auth</title>
</head>
<body>
<?php

if (isset($_POST['go_field'])) {
    if ($_POST ['login_field'] == $login && $_POST['password_field'] == $password) {
        echo 'Logged in';
    } else {
        echo 'error';
    }
}
else {
    ?>
    <form method="post">
        <input type="text" name="login_field"> LOGIN <br/>
        <input type="password" name="password_field"> Password <br/>
        <input type="submit" name="go_field" value="Login">
    </form>
    <?php
}
?>
</body>
</html>

