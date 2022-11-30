<?php $_GET['title'] = "PHP Practices"; ?>
<?php
    $name = "Suhrab";
    $age = 38;
    $city = "Kabul";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>PHP Practices - PHP and HTML</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>
            <?= htmlspecialchars($_GET['title']); ?>
        </h1>
    </header>
    <p><a href=".."><< Back</a></p>
    
   <?php echo "<p>Hello I am {$name} and <strong>{$age}</strong> years old, I live in <em>{$city}<em>.</p>";?>
   
</body>
</html>
