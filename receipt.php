<?php
// Exactly matches your sample logic check block
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"] ?? "";
    $lastname  = $_POST["lastname"] ?? "";
    $date      = $_POST["date"] ?? "";
    $section   = $_POST["section"] ?? "";
    $payment   = $_POST["payment"] ?? "";

    // Combine values cleanly
    $fullname = trim($firstname . " " . $lastname);
    
    // Automatically capture system order date matching layout requirements
    $order_date = date("n/j/y");

} else {
    echo "No data received.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Confirmation - Arirang by BTS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f0f2f5; 
            padding-top: 100px;
            min-height: 100vh;
        }

        nav {
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            border-bottom: 1px solid #eaeaea;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .logo {
            width: 120px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .receipt-container {
            max-width: 520px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 36px; 
            padding: 50px 40px;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
            text-align: center;
        }

        .success-badge {
            width: 68px;
            height: 68px;
            border: 3px solid #e4002b; 
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }

        .success-badge svg {
            width: 32px;
            height: 32px;
            fill: none;
            stroke: #e4002b;
            stroke-width: 4px;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .receipt-container h2 {
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .receipt-container p.subtitle {
            font-size: 13.5px;
            color: #666666;
            line-height: 1.5;
            margin-bottom: 40px;
            padding: 0 10px;
        }

        .data-list {
            width: 100%;
            border-top: 1px dashed #e2e8f0;
            padding-top: 25px;
        }

        .data-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            font-size: 15px;
        }

        .data-label {
            color: #64748b; 
            font-weight: 500;
            text-align: left;
        }

        .data-value {
            color: #000000;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-links">
            <a href="index.html#home">HOME</a>
            <a href="index.html#about">ABOUT</a>
        </div>
        <div class="logo">
            <img src="btslogo.png" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="index.html#listen">LISTEN</a>
            <a href="index.html#tour">TOUR</a>
        </div>
    </nav>

    <div class="receipt-container">
        
        <div class="success-badge">
            <svg viewBox="0 0 24 24">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>

        <h2>Success! Your e-ticket is<br>registered.</h2>
        <p class="subtitle">Please check your email for confirmation and further instructions about the event.</p>

        <div class="data-list">
            
            <div class="data-row">
                <div class="data-label">Customer Name</div>
                <div class="data-value"><?php echo htmlspecialchars($fullname); ?></div>
            </div>

            <div class="data-row">
                <div class="data-label">Event Name</div>
                <div class="data-value">BTS Arirang Tour (<?php echo htmlspecialchars($section); ?>)</div>
            </div>

            <div class="data-row">
                <div class="data-label">Event Date</div>
                <div class="data-value"><?php echo htmlspecialchars($date); ?></div>
            </div>

            <div class="data-row">
                <div class="data-label">Payment Method</div>
                <div class="data-value"><?php echo htmlspecialchars($payment); ?></div>
            </div>

            <div class="data-row">
                <div class="data-label">Order Date</div>
                <div class="data-value"><?php echo htmlspecialchars($order_date); ?></div>
            </div>

        </div>

    </div>

</body>
</html>