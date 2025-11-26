<?php

$beans = ['10 beans', '15 beans', '20 beans', '25 beans', '30 beans'];
$flavor = 'Americano';
$level = ['Light Roast', 'Creamy', 'Milky', 'Strong Brewed'];

switch ($flavor)
{
case 'Americano':
    $info = "Americano uses {$beans[0]}";
    break;
case 'Capuccino':
    $info = "Capuccino uses {$beans[1]}";
    break;
case 'Caramel Macchiato':
    $info = "Caramel Macchiato uses {$beans[2]}";
    break;
case 'Hot Chocolate':
    $info = "Hot Chocolate uses {$beans[3]}";
    break;
case 'Mocha':
    $info = "Hot Chocolate uses {$beans[4]}";
    default:
$offer = "Buy 1 Get 1 for Free";
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kylle's Coffee Bean Supplies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Kylle's Coffee Bean Supplies</h1>
<h2>Coffee Beans per Coffee</h2>
<p><?=$info?></p>


</body>
<?php include 'includes/footer.php'; ?>

</html>