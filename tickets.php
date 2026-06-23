<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Tickets - Arirang by BTS</title>
    <style>
        * {
            margin: 0; 
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #ffffff;
            padding-top: 80px;
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

        .booking-container {
            max-width: 1250px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: 1.1fr 1.2fr;
            border: 1px solid #ccc;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .form-panel {
            padding: 40px;
            border-right: 1px solid #ccc;
        }

        .step-group {
            margin-bottom: 30px;
        }

        .step-title {
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 5px;
        }

        .step-number {
            background: #e4002b;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
        }

        .step-subtitle {
            font-size: 12px;
            color: #666;
            margin-left: 34px;
            margin-bottom: 15px;
        }

        .input-row {
            display: flex;
            gap: 15px;
            margin-left: 34px;
        }

        .input-row input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .echo-box {
            background-color: #f9f9f9;
            font-weight: bold;
            color: #222;
        }

        .date-options {
            display: flex;
            gap: 15px;
            margin-left: 34px;
        }

        .date-btn {
            flex: 1;
            padding: 12px;
            border: 1px solid #ccc;
            background: white;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            transition: all 0.2s ease;
        }

        .date-btn .day-title {
            display: block;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 2px;
            color: #000;
        }

        .date-btn .day-sub {
            font-size: 11px;
            color: #777;
        }

        .date-btn.active {
            border-color: #e4002b;
            background: rgba(228, 0, 43, 0.05);
        }
        .date-btn.active .day-title {
            color: #e4002b;
        }

        .date-btn.both-days {
            border-color: #a82bc2;
        }
        .date-btn.both-days .day-title,
        .date-btn.both-days .discount {
            color: #a82bc2;
            font-weight: bold;
        }
        .date-btn.both-days .discount {
            display: block;
            font-size: 11px;
        }
        .date-btn.both-days.active {
            background: #a82bc2;
        }
        .date-btn.both-days.active .day-title,
        .date-btn.both-days.active .discount {
            color: white;
        }

        .payment-options {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-left: 34px;
        }

        .pay-btn {
            border: 1px solid #ccc;
            background: white;
            padding: 12px 5px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            transition: all 0.2s ease;
        }

        .pay-btn.active {
            border-color: #e4002b;
            background: rgba(228, 0, 43, 0.05);
            color: #e4002b;
        }

        .submit-container {
            padding-left: 34px;
            margin-top: 40px;
        }

        .review-btn {
            width: 100%;
            background: #e4002b;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            transition: background 0.2s;
        }
        .review-btn:hover {
            background: #b80022;
        }

        .map-panel {
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #ffffff;
        }

        .map-panel h3 {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .map-panel p {
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }

        .map-wrapper {
            position: relative;
            width: 100%;
            max-width: 550px;
            display: inline-block;
        }

        .letter-hotspot {
            cursor: pointer;
            pointer-events: auto;
            stroke: transparent;
            stroke-width: 3px;
            transition: fill 0.2s ease, stroke 0.2s ease;
        }

        .footer-note {
            margin-top: 20px !important;
            font-size: 14px !important;
            color: #444 !important;
        }
        .footer-note span {
            color: #e4002b;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-links">
            <a href="index.php#about">HOME</a>
            <a href="index.php#about">ABOUT</a>
        </div>
        <div class="logo">
            <img src="btslogo.png" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="index.php#listen">LISTEN</a>
            <a href="index.php#tour">TOUR</a>
        </div>
    </nav>

    <form id="ticketForm" method="POST" action="receipt.php" class="booking-container">
        
        <div class="form-panel">
            
            <input type="hidden" id="hidden-date" name="date" value="">
            <input type="hidden" id="hidden-payment" name="payment" value="">

            <div class="step-group">
                <div class="step-title"><span class="step-number">1</span> Your Details</div>
                <div class="step-subtitle">Enter your name</div>
                <div class="input-row">
                    <input type="text" name="firstname" id="first-name" placeholder="First Name" required>
                    <input type="text" name="lastname" id="last-name" placeholder="Last Name" required>
                </div>
            </div>

            <div class="step-group">
                <div class="step-title"><span class="step-number">2</span> Choose Date</div>
                <div class="step-subtitle">Select which day(s) you want to attend</div>
                <div class="date-options">
                    <button type="button" class="date-btn" id="day1-btn" data-value="March 13, 2027">
                        <span class="day-title">Day 1</span>
                        <span class="day-sub">March 13, 2027</span>
                    </button>
                    <button type="button" class="date-btn" id="day2-btn" data-value="March 14, 2027">
                        <span class="day-title">Day 2</span>
                        <span class="day-sub">March 14, 2027</span>
                    </button>
                    <button type="button" class="date-btn both-days" id="both-btn" data-value="03/13/27 - 03/14/27">
                        <span class="day-title">Both Days</span>
                        <span class="discount">Save 10%</span>
                    </button>
                </div>
            </div>

            <div class="step-group">
                <div class="step-title"><span class="step-number">3</span> Choose Your Section</div>
                <div class="step-subtitle">Select a section on the map</div>
                <div class="input-row">
                    <input type="text" name="section" id="section-echo" class="echo-box" placeholder="Select a section by clicking the map letters" readonly required>
                </div>
            </div>

            <div class="step-group">
                <div class="step-title"><span class="step-number">4</span> Payment Method</div>
                <div class="step-subtitle">Choose how you want to pay</div>
                <div class="payment-options">
                    <button type="button" class="pay-btn" data-value="CARD">Card</button>
                    <button type="button" class="pay-btn" data-value="GCASH">Gcash</button>
                    <button type="button" class="pay-btn" data-value="PAYPAL">PayPal</button>
                    <button type="button" class="pay-btn" data-value="APPLE PAY">Apple Pay</button>
                </div>
            </div>

            <div class="submit-container">
                <input type="submit" class="review-btn" value="PRINT RECEIPT &nbsp; →">
            </div>
        </div>

        <div class="map-panel">
            <h3>STADIUM SEATING MAP</h3>
            <p>Click a section to see price and seats</p>

            <div class="map-wrapper" style="position: relative; width: 100%; max-width: 550px; display: inline-block;">
                <svg viewBox="0 0 1000 615" width="100%" height="100%" style="display: block;">
                    <image href="SEATPLAN.png" x="0" y="0" width="1000" height="615" style="user-select: none;" />
                    <rect id="spot-a" class="letter-hotspot" x="468" y="150" width="64" height="64" rx="8" data-name="Section A" fill="transparent" />
                    <rect id="spot-b" class="letter-hotspot" x="258" y="280" width="64" height="64" rx="8" data-name="Section B" fill="transparent" />
                    <rect id="spot-c" class="letter-hotspot" x="470" y="415" width="64" height="64" rx="8" data-name="Section C" fill="transparent" />
                    <rect id="spot-d" class="letter-hotspot" x="700" y="280" width="64" height="64" rx="8" data-name="Section D" fill="transparent" />
                </svg>
            </div>

            <p class="footer-note">Closer to the Stage, <span>Higher</span> the Experience</p>
        </div>

    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sectionEchoInput = document.getElementById('section-echo');
            const letterHotspots = document.querySelectorAll('.letter-hotspot');
            const hiddenDate = document.getElementById('hidden-date');
            const hiddenPayment = document.getElementById('hidden-payment');

            letterHotspots.forEach(spot => {
                spot.addEventListener('click', function() {
                    letterHotspots.forEach(s => s.classList.remove('selected'));
                    sectionEchoInput.value = this.getAttribute('data-name');
                });
            });

            const dateButtons = document.querySelectorAll('.date-btn');
            dateButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    dateButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    hiddenDate.value = btn.getAttribute('data-value');
                });
            });

            const payButtons = document.querySelectorAll('.pay-btn');
            payButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    payButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    hiddenPayment.value = btn.getAttribute('data-value');
                });
            });

        });

    </script>
</body>
</html> 
