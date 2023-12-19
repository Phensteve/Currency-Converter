<?php
$result = "";
if (empty($_POST['amount'])) {
    $result = "You have not given any value";
}
if (isset($_POST['convert_d_n'])){
    if (empty($_POST['amount'])) {
        $result = "You have not given any";
    }
    $amount = $_POST['amount'];
    $result = "₦".$amount * 850;
}
if (isset($_POST['convert_n_d'])){
    if (empty($_POST['amount'])) {
        $result = "You have not given any";
    }
    $amount = $_POST['amount'];
    $result = "$".$amount / 850;
}
if (isset($_POST['convert_e_n'])){
    if (empty($_POST['amount'])) {
        $result = "You have not given any";
    }
    $amount = $_POST['amount'];
    $result = "£".$amount * 1000;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <style>
        body{
            text-align: center;
            font-family: Calibri;
            justify-content: center;
        }
        h1{
            font-size: 3rem;
        }
        input[type=number]{
            background-color: #efefef;
            border-radius: 2%;
            border: none;
            padding: 2rem;
            margin: 1rem;
            outline: none;
        }
        input[type=submit]{
            border-radius: 2%;
            border: none;
            padding: 2rem;
            margin: 1rem;
            outline: none;
            padding: 1rem;
            cursor: pointer;
            border: 2rem;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <label for=""><h1>Oluyo Money Converter</h1></label><br>
        <input type="number" name="amount" value="<?php echo($naira) ?>">
        <!-- <input type="submit" value="Convert" name="convert_n_d"> -->
        <section>
            <input type="submit" value="Dollar to Naira ($ - ₦)" name="convert_d_n">
            <input type="submit" value="Naira to Dollar (₦ - $)" name="convert_n_d">
            <input type="submit" value="Euro to Naira (£ - ₦)" name="convert_e_n">
        </section>
    </form>
    <div>
        <?php echo("Your answer is " . $result) ?>
    </div>
</body>
</html>