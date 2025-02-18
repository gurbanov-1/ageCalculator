<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Age Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>Age Calculator</h2>
        <!-- Simple form that submits to the same page -->
        <form method="POST">
            <div class="form-group">
                <label>Enter Your Birth Date:</label>
                <input type="date" name="birthdate" required>
            </div>
            <button type="submit">Calculate Age</button>
        </form>
        
        <?php
        // Check if form was submitted
        if($_POST['birthdate']) {
            // Get the birth date from form
            $birth_date = $_POST['birthdate'];
            
            // Get today's date
            $today = date('Y-m-d');
            
            // Convert dates to timestamp
            $birth_timestamp = strtotime($birth_date);
            $today_timestamp = strtotime($today);
            
            // Calculate difference
            $age_years = floor(($today_timestamp - $birth_timestamp) / (365.25 * 24 * 60 * 60));
            $age_months = floor(($today_timestamp - $birth_timestamp) / (30.44 * 24 * 60 * 60)) % 12;
            $age_days = floor(($today_timestamp - $birth_timestamp) / (24 * 60 * 60)) % 30;
            
            // Display result
            echo "<div class='result'>";
            echo "<p>Your age is: $age_years years, $age_months months, and $age_days days</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html> 