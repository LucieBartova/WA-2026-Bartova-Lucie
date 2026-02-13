<?php
$name = "";
$age = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    if ($name == "") {
        $message = "Nezadal jsi jméno.";
    } else if ($name == "Lucie") {
        $message = "Ahojky Lucinko";
    } else {
        $message = "Kdo jsi, " . $name . "?";
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test formuláře</title>
</head>
<body>

    <h1>Test formuláře</h1>

    <form method="post">
        <input type="text" name="name" placeholder="Zadejte jméno"><br><br>
        <input type="text" name="age" placeholder="Zadejte věk"><br><br>
        <button type="submit">Odeslat</button>
    </form>

    <p>
        <?php echo "Výstup (jméno): " . $message; ?>
    </p>

    <p>
        <?php echo "Výstup (věk): " . $age; ?>
    </p>

</body>
</html>
