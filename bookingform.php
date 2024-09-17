<?php
include 'config.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car Bookkiing!</title>
</head>
<body>
    
<a class="navbar-brand" href="index.php">
    <h2>
    Car<span style="color:brown">Book</span>
    </h2>
</a>

    
    <form action="booking.php" method="post">
        <label for="car_id">Select Car:</label>
        <select name="car_id" id="car_id">
            <?php
            // Fetch cars from the database
            $result = mysqli_query($conn, "SELECT * FROM cars");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['c_name'] . " - $" . $row['price_per_day'] . "/day</option>";
            }
            ?>
        </select>

</body>
</html>