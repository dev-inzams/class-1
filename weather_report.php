<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>

<?php
    $temperature = 18; 


    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $message = "It's cool.";
    } elseif ($temperature > 15) {
        $message = "It's warm.";
    } else {
        $message = "Invalid temperature.";
    }
?>

<h1>Weather Report</h1>
<p>The current temperature is <?php echo $temperature; ?>°C.</p>
<p><?php echo $message; ?></p>

</body>
</html>
