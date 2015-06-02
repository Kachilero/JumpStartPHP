<!DOCTYPE html>
<html>
<head>
    <title>PHP and HTML working together</title>
</head>

<body>
<h1><?php echo 'This is a H1 tag with PHP data'; ?></h1>
<?php
    $myVar = 'Hello World, this is using a variable';
    echo $myVar;
?><br/><?php
    $myVar = "Goodbye";
    echo $myVar;

    $myArray = array(
        'item1' => 'My Value',
        'item2' => 'Another Value'
    );
?>
</body>
</html>