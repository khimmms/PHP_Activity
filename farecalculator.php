<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $distance = $_POST['distance'];
    $passenger_type = $_POST['passenger_type'];

    //constants: should be capitalized
    $base_fare = 13.00; 
    $additional_fare = 1.75; 
    $discount_rate = 0.20; 
   
    if ($distance <= 5) {
        $total_fare = $base_fare;
    } else {
        $extra_km = $distance - 5;
        $total_fare = $base_fare + ($extra_km * $additional_fare);
    }

    
    if ($passenger_type == "student_elderly") {
        $total_fare = $total_fare - ($total_fare * $discount_rate);
    }
    header("Location: jeepney.php?total_fare= Your Total Fare: " . $total_fare);
   
   
}
?>
