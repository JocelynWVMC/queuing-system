<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
    $number = $_POST["number"];
    $_SESSION["selected_number"] = $number;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Click Number</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number">Select a number:</label><br>
    <button type="submit" name="number" value="1">1</button>
    <button type="submit" name="number" value="2">2</button>
    <button type="submit" name="number" value="3">3</button>
    <button type="submit" name="number" value="4">4</button>
    <button type="submit" name="number" value="5">5</button>
</form>

<?php
if (isset($_SESSION["selected_number"])) {
    echo "You selected the number: " . $_SESSION["selected_number"];
}
?>

</body>
</html>
