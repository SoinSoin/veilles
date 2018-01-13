<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="lego.css" />

</head>
<body>

<?php

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP est super' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Affiche : 'Foo: baz'
$foo->printPHP();       // Affiche : 'PHP est super'
$bar->printItem('baz'); // Affiche : 'Bar: baz'
$bar->printPHP();       // Affiche : 'PHP est super'

?>

</body>
</html>

