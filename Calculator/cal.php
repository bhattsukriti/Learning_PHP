<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="number" name="num01" placeholder="Number one" required>
        <select name="operator">
            <option value="add">+</option> 
            <option value="sub">-</option> 
            <option value="multi">*</option> 
            <option value="divide">/</option> 
        </select>
        <input type="number" name="num02" placeholder="Number two" required>
        <button>Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = htmlspecialchars($_POST["operator"]);

        // Error Handlers
        $errors = false;

        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p class='calc-error'>Fill in all fields!</p>";
            $errors = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'>Only write number!</p>";
            $errors = true;
        }

        // Calculate the number
        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "sub":
                    $value = $num01 - $num02;
                    break;
                case "multi":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    if ($num02 != 0) {
                        $value = $num01 / $num02;
                    } else {
                        echo "<p class='calc-error'>Cannot divide by zero!</p>";
                        $errors = true;
                    }
                    break;
                default:
                    echo "<p class='calc-error'>Something went wrong!</p>";
            }

            if (!$errors) {
                echo "<p class='calc-result'>Result = " . $value . "</p>";
            }
        }
    }
    ?>
</body>
</html>
