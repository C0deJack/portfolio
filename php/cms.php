<?php
session_start ();

require('connect.php');
require('checkPassword.php');
require('download.php');
require('upload.php');

$passwordIn = $_POST['password'];
$userIn = $_POST['user-name'];

$email_out = $_POST['email_out'];
$phone_out = $_POST['phone_out'];
$about_out = $_POST['about_out'];

if (!empty($userIn && $passwordIn)) {

    $db = connect();

    $out = getPassword($db, $userIn);
    $passwordOut = $out['password'];
    $userOut = $out['user'];

    echo verifyPassword($passwordOut, $passwordIn, $userOut);

} elseif
    ($_SESSION['logged-in'] !== 1){
    header("Location: login.php");
}

$db = connect();

updateAboutMe($db, $email_out, $phone_out, $about_out);

$result = getAboutMe($db);

$email = $result['email'];
$phone = $result['phone'];
$about = $result['about'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/cms.css">
    <title>Portfolio Input Page</title>
</head>
<body>
    <h3>Welcome to the About Me Input Page</h3>

    <nav>
        <a href="projects.php">Link to Projects Input Page</a><br><br>
    </nav>

    <form method="post" action="cms.php">
        <input type="text" name="email_out" size="35" value="<?php echo $email; ?>">email
        <input type="tel" name="phone_out" value="<?php echo $phone; ?>">Telephone Number<br><br>
        <textarea rows="12" cols="120"  name="about_out"><?php echo $about; ?></textarea>
        <input type="submit" value="update">
    </form><br>

    <h4>Logout</h4>
    <form method="post" action="logout.php">
        <input type="hidden" name="logout">
        <input type="submit" value="logout">
    </form>

</body>
</html>




