<?php
require_once __DIR__ . '/boot.php';
use Bark\Model\Connection;
use Bark\Model\GuestbookModel;

try {
    $model = new GuestbookModel((new Connection())->getInstance());
    $list = $model->getList();
} catch(Exception $e) {
    header("Location: error.php/?msg=" . $ex->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>View guest book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" />
</head>
<body>
<div class="container">
    <table class="table">
        <tr><th>Name</th><th>Email</th><th>comment</th><th>Date</th></tr>
        <?php foreach($list as $row) : ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['comment']; ?></td>
                <td><?php echo $row['datetime']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <a class="btn btn-primary" href='index.php'>Add a guest</a>
    </p>
</div>
</body>
</html>