<?php
require_once __DIR__ . '/boot.php';

use Bark\Model\GuestbookModel;
use Bark\Model\Connection;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

try {
    $model = new GuestbookModel((new Connection())->getInstance());
    $model->addMessage($name, $email, $message);
} catch (Exception $ex) {
    header("Location: error.php/?msg" . $ex->getMessage());
}
?>
<html>
<head>
    <title>Add Guestbook</title>
</head>
<body>
<div>
    // link to view guestbook page
    <?php echo "<a href='viewguestbook.php'>View guestbook</a>"; ?>
</div>
</body>
</html>

