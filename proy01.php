<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $suma = $num1 + $num2;
    echo "La suma de los dos números es: " . $suma;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="num1">Introduce el Número 1:</label>
    <input type="number" name="num1" required><br><br>

    <label for="num2">Introduced el Número 2:</label>
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Sumar">
</form>