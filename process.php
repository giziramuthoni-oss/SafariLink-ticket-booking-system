<?php

// Receive data from the form
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$route = $_POST["route"];
$seats = $_POST["seats"];
$travelDate = $_POST["travelDate"];
echo "<prev>";
print_r($_POST);
echo "</prev>";

// Assign fare to each route
if ($route == "Nairobi-Nyeri") {
    $fare = 800;
}
elseif ($route == "Nairobi-Kerugoya") {
    $fare = 700;
}
elseif ($route == "Nairobi-Mombasa") {
    $fare = 1500;
}
elseif ($route == "Nairobi-Nakuru") {
    $fare = 600;
}
else {
    $fare = 0;
}

// Calculate total fare
$totalFare = $fare * $seats;

// Display booking details
echo "<h2>Ticket Booked Successfully!</h2>";

echo "<strong>Passenger Name:</strong> $name <br><br>";
echo "<strong>Phone Number:</strong> $phone <br><br>";
echo "<strong>Email:</strong> $email <br><br>";
echo "<strong>Route:</strong> $route <br><br>";
echo "<strong>Travel Date:</strong> $travelDate <br><br>";
echo "<strong>Number of Seats:</strong> $seats <br><br>";
echo "<strong>Route Fare:</strong> Ksh $fare <br><br>";
echo "<strong>Total Fare:</strong> Ksh $totalFare <br><br>";

echo "<h3>Thank you for travelling with SafariLink!</h3>";

?>