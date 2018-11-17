<!DOCTYPE html>
<html>
<head>
    <title>Bark Guestbook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" />
</head>
<body>
<div class="container">
    <div class="alert alert-danger" role="alert">
        <h2><?php echo "An error occurred " . htmlspecialchars($_GET['msg']); ?></h2>
    </div>
    <div><a class="btn btn-primary" href="index.php">Go to Home</a></div>
</body>
</html>
