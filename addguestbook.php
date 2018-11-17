<?php
require_once __DIR__ . '/boot.php';

use Bark\Model\GuestbookModel;
use Bark\Model\Connection;

if (!isset($_POST)) {
    header("Location: index.php");
}
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if (NULL === $name || NULL === $email || NULL === $comment) {
    header("Location: index.php/?msg=All fields are required");
}
try {
    $model = new GuestbookModel((new Connection())->getInstance());
    $model->addMessage($name, $email, $comment);
} catch (Exception $ex) {
    header("Location: error.php/?msg=" . $ex->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Guestbook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" />
</head>
<body>
<div class"container">
    <a class="btn btn-primary" href='viewguestbook.php'>View guestbook</a>
</div>
</body>
</html>
