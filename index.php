<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4-1</title>
</head>

<body>
    <?php
    $myfile = fopen("php.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("php.txt"));
    fclose($myfile);
    ?>
</body>

</html>