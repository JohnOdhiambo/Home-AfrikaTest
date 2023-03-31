<?php
// Define the brown and beige colors
$brown_color = '#5D4037';
$beige_color = '#D7CCC8';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Africa</title>
    <style>
        body {
            /* background-color: rgba(255, 77, 0); */
            /* background-color: rgba(50, 115, 220, 0.3); */
            background-color: hsla(14, 100%, 53%, 0.6);
        }
        h1 {
            color: <?= $brown_color ?>;
        }
        .property-listing {
            border: 1px solid <?= $brown_color ?>;
            background-color: <?= $beige_color ?>;
            padding: 10px;
            margin-bottom: 10px;
        }
        .transaction {
            background-color: <?= $beige_color ?>;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="top"></div>
        <div class="main">
            <div class="navigation" style="text-align: center;">
                <h1>Home Africa Real Estate</h1>

                <br>
                <div class="right" style="text-align: right;">
                    <button class="left" style="text-align: left;">
                        <a onclick="window.location.href='property.php';" id="btn-property">Add New Property</a>
                    </button> &nbsp;

                    <button class="left" style="text-align: left;">
                        <a onclick="window.location.href='logout.php';" id="btn-logout" >Logout</a>
                    </button> &nbsp;
                    
                </div>
            </div>

            <div>
                <h2 class="property-title">Property Listings</h2>
                    <div class="property-listing">               
                        <h3>Kilimani 1200sq</h3> 
                        <p>Price: $500,000</p>

                        <p>Description:Great scenery with accesible roads ,Gated community.</p>
                    </div>

                    <div class="property-listing">
                        <h3>456 Kampala St</h3>
                        <p>Price: $750,000</p>
                        <p>Description: over seeing the mighty lake victoria has a privatepool and a private pool house.</p>
                    </div>
            </div>

            <h2>Sales and Rental Management</h2>
            <div>
                <div class="transaction">
                    <h3> 555 Kilimani sq</h3>
                    <p>Agent:Maryam Natasha</p>
                    <p>Amount: $500,000</p>
                </div>

                <div class="transaction">
                    <h3>456 Kampalla st</h3>
                    <p>Agent:Shaka Onyango </p>
                    <p>Amount: $2,000/month</p>
                </div>
            </div>
        </div>
        

</body>
</html>