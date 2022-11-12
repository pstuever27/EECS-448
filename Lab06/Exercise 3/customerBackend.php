<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercise 3 | Storefront</title>

</head>
<body>
    <div class="header">
        <!--Make this into a navbar for the different parts of the lab-->
        <a href="../../index.html"><img src="../../homeicon.png"></a>
        <a href="../Exercise 1/index.php">Exercise 1</a>
        <a href="../Exercise 2/index.html">Exercise 2</a>
        <a class="active" href="index.html">Exercise 3</a>
        <a href="../index.html">Source Code</a>
        <!--Make these buttons on the navbar to navigate to the folders-->
    </div>
    <div class="order-container">
        <h1>Reciept</h1>
        <table class="reciept">

        <?php
            error_reporting(E_ALL); 
            ini_set("display_errors", 1); 

            $option1 = $_POST['option1'];
            $option2 = $_POST['option2'];
            $option3 = $_POST['option3'];

            $shipping = $_POST['ship'];

            $user = $_POST['user'];
            $password = $_POST['password'];


        ?>

        <h2>Welcome!</h2>

        <?php

            echo"<p>Your Login Credentials:</p>
                 <ul>
                    <li>Username: $user</li>
                    <li>Password: $password</li>
                 </ul>";
        ?>

        <table>
            <tr>
                <td></td>
                <td><strong>Quantity</strong></td>
                <td><strong>Cost Per Item</strong></td>
                <td><strong>Sub Total</strong></td>
            </tr>
            <tr>
                <td><strong>iPhone 4S</strong></td>
                <?php
                    $total1 = $option1*150;
                    echo"<td>$option1</td>";
                ?>
                <td>$150.00</td>
                <?php
                    echo"<td>\$$total1</td>";
                ?>
            </tr>
            <tr>
                <td><strong>iPhone 6</strong></td>
                <?php
                   $total2 = $option2*200;
                    echo"<td>$option2</td>";
                ?>
                <td>$200.00</td>
                <?php
                    echo"<td>\$$total2</td>";
                ?>
            </tr>
            <tr>
                <td><strong>Samsung Galaxy S10</strong></td>
                <?php
                    $total3 = $option3*250;
                    echo"<td>$option3</td>";
                ?>
                <td>$250.00</td>
                <?php
                    echo"<td>\$$total3</td>";
                ?>
            </tr>
            <tr>
                <td><strong>Shipping</strong></td>
                <?php
                    if($shipping == 0)
                    {
                        echo"<td colspan='2'>7-Day Free Shipping</td>
                             <td>\$$shipping</td>";
                    }
                    if($shipping == 5)
                    {
                        echo"<td colspan='2'>3-Day Shipping</td>
                        <td>\$$shipping</td>";
                    }
                    if($shipping == 50)
                    {
                        echo"<td colspan='2'>Overnight Shipping</td>
                        <td>\$$shipping</td>";
                    }
                ?>
            </tr>
            <tr>
                <td colspan="3"><strong>Total Cost</strong></td>
                <?php
                    echo"<td>\$",($total1+$total2+$total3+$shipping),"</td>";
                ?>
            </tr>
        </table>
    </div>
</body>
</html>