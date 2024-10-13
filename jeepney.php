<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeepney Fare Calculator</title>
</head>
<body>

<h2>Jeepney Fare Calculator</h2>

<form  action="farecalculator.php" method="POST">
    <label for="distance">Enter Distance (km):</label>
    <input type="number" name="distance" step="0.1" min="0" required>
    <br><br>

    <label for="passenger_type">Select Passenger Type:</label>
    <select name="passenger_type" required>
        <option value="regular">Regular</option>
        <option value="student_elderly">Student/Elderly</option>
    </select><br><br>
    <input type="submit" value="Calculate">
    
    
    <?php 
    if(isset($_GET["total_fare"])){
    
    ?>
    <p><?php echo ($_GET["total_fare"]) ?></p>
    <?php 
        }
    ?>
</form>

</body>
</html>