<!DOCTYPE html>
<html>
<head>
    <title>Suma de 2 Números</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .result {
            margin-top: 10px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .div {
            padding: 10px; 
        }
    </style>
</head>
<body> 
    <div class="container">
        <h1>Suma de dos números</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="num1">Número 1:</label>
                <input type="number" class="form-control" name="num1" id="num1" required>
            </div>
            <div class="div">  </div>
            <div class="form-group">
                <label for="num2">Número 2:</label>
                <input type="number" class="form-control" name="num2" id="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Sumar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $suma = $num1 + $num2;
            echo '<div class="result">La suma de los dos números es: ' . $suma . '</div>';
        }
        ?>
    </div>
</body>
</html>
