<?php
declare(strict_types=1);
include "header.php";

$taxRate = 12;

$coffee_products = [
    "Arabica Beans"   => ["price" => 450, "stock" => 6],
    "Robusta Beans"   => ["price" => 350, "stock" => 14],
    "Liberica Barako" => ["price" => 500, "stock" => 9],
    "Espresso Blend"  => ["price" => 420, "stock" => 4],
    "Hazelnut Flavor" => ["price" => 380, "stock" => 20],
    "Vanilla Brew"    => ["price" => 390, "stock" => 11],
    "Mocha Mix"       => ["price" => 410, "stock" => 8],
];

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kylle's Coffee Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="title">Kylle's Coffee Shop</h1>
    <div class="table-container">
        <table class="stock-table">
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Re-order?</th>
                <th>Total Value (₱)</th>
                <th>Tax Due (₱)</th>
            </tr>
            <?php foreach ($coffee_products as $name => $data) { ?>
            <tr class="<?= ($data['stock'] < 10) ? 'low-stock' : '' ?>">
                <td><?= $name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $taxRate), 2) ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
<?php include "footer.php"; ?>
</body>
</html>
