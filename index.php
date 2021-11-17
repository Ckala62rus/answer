<?php
    //PHP 7.4
    require __DIR__ . '/main.php';

    $a = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid animi, consequatur consequuntur dolore expedita harum illo ipsa itaque magni minima nisi pariatur possimus quod vero. Deserunt inventore reprehenderit voluptate.';
    //$a = 'Lorem ipsum dolor sit amet';

    $link = 'http://example.com/article/1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php echo (new LinkGenerator($link, $a, 2))->getLink(); ?>
</body>
</html>