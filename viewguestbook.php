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
<html>
<head>
    <title>View guest book</title>
</head>
<body>
<div>
    <table>
        <tr><th>Name</th><th>Email</th><th>message</th><th>Date</th></tr>
<?php foreach($list as $row) : ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['datetime']; ?></td>
    </tr>
<?php endforeach; ?>
    </table>
</div>
</body>
</html>
