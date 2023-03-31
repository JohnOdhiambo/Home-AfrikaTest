<!DOCTYPE HTML>
<html>
<head>
	<title>PDO - Read Records - PHP CRUD Tutorial</title>
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<!-- custom css -->
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
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Waiting List: Properties</h2>
                <button class="left" style="text-align: left;">
                    <a onclick="window.location.href='dashboard.php';" id="btn-property">Home</a>
                </button> &nbsp;
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Properties</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price in Ksh.</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    include 'db.php'; 
                    $query="select * from properties limit 50"; // Fetch all the data from the table customers

                    $result=mysqli_query($con,$query);
                
                ?>
                    
                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>

</body>
</html>