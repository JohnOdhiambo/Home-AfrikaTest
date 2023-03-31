<!DOCTYPE html>
<html>
<head>
    <title>Home Africa</title>
    <!-- <link rel="stylesheet" href="style.css"/> -->
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
    <div class="center" style="text-align: center;">
        <div class="right" style="text-align: right;">
                <button class="left" style="text-align: left;">
                    <a onclick="window.location.href='dashboard.php';" id="btn-property">Home</a>
                </button> &nbsp;

                <button class="left" style="text-align: left;">
                    <a onclick="window.location.href='logout.php';" id="btn-logout" >Logout</a>
                </button> &nbsp;                   
        </div>

        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <td>Property Name</td>
                        <td><input type='text' name='name' class='form-control' required /></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea name='description' class='form-control' required></textarea></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type='text' name='price' class='form-control' required /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type='submit' value='Save' class='btn btn-primary' /> <br>
                            
                            <a href='index.php' class='btn btn-danger'> Check the properties on waiting list</a>
                        </td>
                    </tr>
                </table>
        </form>
    </div>


</body>
</html>