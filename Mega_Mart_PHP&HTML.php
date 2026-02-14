<?php
// Multi-dimensional associative array
$products = [
    ["name" => "Premium Rice", "price" => "₹1,100", "category" => "Grocery"],
    ["name" => "Cooking Oil",  "price" => "₹220",   "category" => "Essentials"],
    ["name" => "Cookware Set", "price" => "₹2,499", "category" => "Kitchen"],
    ["name" => "Mix Dry Fruits",   "price" => "₹850",   "category" => "Snacks"],
    ["name" => "Television", "price" => "₹9,999", "category" => "Electronic"],
    ["name" => "Cadbury Chocolate", "price" => "₹100", "category" => "Sweet"],
    ["name" => "Mobile Phone", "price" => "₹4,999", "category" => "Electronic"],
    ["name" => "Salt", "price" => "₹300", "category" => "Essentials"],
    ["name" => "Lentils", "price" => "₹2,100", "category" => "Grocery"],
    ["name" => "Steel Knife", "price" => "₹599", "category" => "Kitchen"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prabdeep Mega Mart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        hr {
            width: 60%;
            margin: 10px auto 30px auto;
            border: 1px solid #ccc;
        }

        table {
            width: 65%;
            margin: auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th {
            background-color: #34495e;
            color: #ffffff;
            padding: 12px;
            font-weight: normal;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        tr:hover {
            background-color: #f5f7fa;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>Prabdeep Mega Mart - Hari Nagar, Delhi</h1>
    <hr>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['category']; ?></td>
                <td><?php echo $item['price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>Total Items: <?php echo count($products); ?></p>

</body>
</html>
