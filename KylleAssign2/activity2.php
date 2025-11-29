<?php

$beans  = ['10 beans', '15 beans', '20 beans', '25 beans'];
$levels = ['Light Roast', 'Creamy', 'Milky', 'Strong Brewed'];
$prices = ['₱60', '₱75', '₱85', '₱95'];

$flavor = 'Americano';

switch ($flavor) {
    case 'Americano':
        $info = "Americano uses {$beans[0]} - {$levels[0]}, Price: {$prices[0]}";
        break;
    case 'Cappuccino':
        $info = "Cappuccino uses {$beans[1]} - {$levels[1]}, Price: {$prices[1]}";
        break;
    case 'Caramel Macchiato':
        $info = "Caramel Macchiato uses {$beans[2]} - {$levels[2]}, Price: {$prices[2]}";
        break;
    case 'Hot Chocolate':
        $info = "Hot Chocolate uses {$beans[3]} - {$levels[3]}, Price: {$prices[3]}";
        break;
    default:
        $info = "Buy 1 Take 1 Promo!";
}

$list1 = "";
foreach ($beans as $b) {
    $list1 .= "<p>Bean Option: $b</p>";
}

$list2 = "";
for ($i = 0; $i < count($prices); $i++) {
    $list2 .= "<p>Price Option: {$prices[$i]}</p>";
}

$list3 = "";
$i = 1;
while ($i <= 3) {
    $list3 .= "<p>Loop Count: $i</p>";
    $i++;
}

if ($flavor === "Americano") {
    $note = "<p>This is a strong and classic coffee.</p>";
}
elseif ($flavor === "Cappuccino" || $flavor === "Caramel Macchiato") {
    $note = "<p>This is a creamy or sweet coffee.</p>";
}
else {
    $note = "<p>This is another type of drink.</p>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kylle's Coffee Bean Supplies</title>
</head>


<body>

<h1>Kylle's Coffee Bean Supplies</h1>

<h2>Coffee Beans per Coffee</h2>

<p><?= $info ?></p>

<h3>Loop 1: foreach (Beans)</h3>
<?= $list1 ?>

<h3>Loop 2: for (Prices)</h3>
<?= $list2 ?>

<h3>Loop 3: while (Counter)</h3>
<?= $list3 ?>

<h3>Condition Result:</h3>
<?= $note ?>

<?php include 'includes/footer.php'; ?>

</body>
</html>
