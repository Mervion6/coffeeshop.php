php

<?php
// ------------------------------
// COFFEE SHOP STORE (PHP ACTIVITY)
// ------------------------------

// Store name (variable)
$storeName = "Chong's Coffee Haven";

// Coffee items stored in an array
$menu = [
    ["name" => "Espresso", "price" => 110],
    ["name" => "Cappucino", "price" => 100],
    ["name" => "Mocha", "price" => 120],
    ["name" => "Vanilla Cold Brew", "price" => 140]
];

// Example PHP expression using operators
$serviceFee = 10; // Fixed fee
$totalItems = count($menu); // Count items in array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $storeName; ?></title>
    <style>
        body {
            background: #2c2c54; 
            font-family: Arial, sans-serif;
            color: #f5f6fa;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
        }
        p {
            text-align: center;
        }
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            background: #474787;
            color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            border-bottom: 1px solid #aaa;
            text-align: center;
        }
        th {
            background: #706fd3;
        }
        tr:hover {
            background: #706fd3;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #dcdde1;
        }
    </style>
</head>
<body>

    <h1><?php echo $storeName; ?></h1>
    <p>Welcome! Explore our delicious handcrafted beverages.</p>

    <table>
        <tr>
            <th>Product</th>
            <th>Price (PHP)</th>
        </tr>

        <?php
        // Loop through menu array and display all coffee items
        foreach ($menu as $item) {
            echo "<tr>";
            echo "<td>" . $item['name'] . "</td>";
            echo "<td>₱" . $item['price'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="footer">
        <?php 
        // Display meaningful PHP-generated info
        echo "We currently offer <strong>$totalItems</strong> coffee items. ";
        echo "A service fee of ₱$serviceFee applies to all orders.";
        ?>
    </div>

</body>
</html>




























lse {

  echo "You Failed.";
}





























