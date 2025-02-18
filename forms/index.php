<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Basic Forms </h2>
    <!-- By default the req method is GET, we can have POST too. -->
    <form action="process.php" method="POST">
        <input name="username" type=text>
        <input name="password" type=password>
        <input name="status" type=text>
        <input name="SUBMIT" type=submit>
    </form>
</body>
</html>