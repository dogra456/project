<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
           
        }
                .navbar {
            margin-bottom: 20px;
        }
        .breadcrumb {
            background-color: #f8f9fa;
            padding: 10px 20px;
            border-radius: 0.25rem;
        }
       
        .order-container {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .order-header {
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 15px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .order-details {
            margin-bottom: 15px;
        }

        .order-details img {
            max-height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }
        .order-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 15px;
        }
        .order-item a{
            text-decoration: none;
            color: #555;
        }
        .order-item:last-child {
            border-bottom: none;
        }
        .order-item:hover{
            box-shadow: none;
        }
        .order-item h6 {
            margin: 0;
            font-weight: bold;
        }
        .order-item p {
            margin: 0;
            color: #555;
        }
        .order-summary {
            background-color: #f8f9fa;
            padding: 15px;
            border-top: 1px solid #e0e0e0;
            border-radius: 8px;
            text-align: right;
            font-weight: bold;
        }
        .order-summary h4 {
            margin: 0;
            font-size: 1.4rem;
        }
        .status {
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">My Account</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('order') ?>">My Orders</a></li>
            <li class="breadcrumb-item active" aria-current="page">OD428800548295960100</li>
        </ol>
    </nav>
    <h1 class="text-center mb-4">Order History</h1>

    <?php 
    $first = true; // Flag to display the date only once
    $total_price = 0; // Initialize total price
    ?>

    <!-- Display the order items -->
        <div class="order-container">
    <?php foreach ($results as $order): ?>
            <div class="order-header">
                <!-- Display date only once -->
                <?php if ($first): ?>
                    <h5>Order Date: <?php echo $order->date; ?></h5>
                    <p class="status">Status: <?= $order->status ?></p>
                    <?php $first = false; ?>
                <?php endif; ?>
                
            </div>
            <div class="order-details">
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= base_url() ?>mia/<?= $order->product_id ?>" id="myLink">
                            <img src="<?= base_url() ?>assets/img/<?= $order->product_img ?>" alt="<?= $product->product_name ?>">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="order-item">
                            <a href="#">
                            <h6><?= $order->product_name ?></h6>
                            </a>
                            <p>Quantity: <?= $order->qty ?></p>
                            <p>Price: <i class="fa-solid fa-indian-rupee-sign"></i><?= $order->product_price ?></p>
                        </div>
                        <?php $total_price += $order->total_price; // Accumulate the total price ?>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>
        </div>

    <!-- Display the total price -->
    <div class="order-summary">
        <h4>Total Price: <i class="fa-solid fa-indian-rupee-sign"></i><?= number_format($total_price, 2) ?></h4>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
