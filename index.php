<?php
// Function to compute the square root of a number
function calculateSquareRoot($number) {
    return sqrt($number);
}

// Initialize variables
$inputNumber = isset($_POST['number']) ? (float)$_POST['number'] : null;
$squareRoot = null;

if ($inputNumber !== null) {
    $squareRoot = calculateSquareRoot($inputNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Square Root Calculator</title>
</head>
<body>
    <div class="container">
        <h2>Square Root Calculator</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" step="any" required>
            <button type="submit" name="submit">Calculate Square Root</button>
        </form>

        <?php
        if ($squareRoot !== null) {
            echo "<p>The square root of $inputNumber is " . number_format($squareRoot, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
