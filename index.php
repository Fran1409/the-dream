
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The Dream</title>
</head>
<body>

    <h3>Let's see how much this costs in Romania:</h3>
    <form action="" method="POST">
        Amount: <input type="text" name="amount" >
        <select id="currency" type="text" name="currency">
                <option value="LEI">LEI</option>
                <option value="EURO">EURO</option>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php require_once "currency.php" ?>
    
</body>
</html>