<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <!--Make this into a navbar for the different parts of the lab-->
        <a href="../../index.html"><img src="../../homeicon.png"></a>
        <a class="active" href="index.php">Exercise 1</a>
        <a href="../Exercise 2/index.html">Exercise 2</a>
        <a href="../Exercise 3/index.html">Exercise 3</a>
        <a href="../index.html">Source Code</a>
        <!--Make these buttons on the navbar to navigate to the folders-->
    </div>

<h1>Exercise 1 | 100x100 Table</h1>

    <table class="mult" border='1'>
            <?php
                for($r = 0; $r < 101; $r++){
                echo"<tr>";
                    for($s = 0; $s < 101; $s++){
                       if($s == 0){
                            if($r == 0){
                                echo"<td></td>";
                            }
                            else{
                                echo"<td>$r</td>";
                            }
                       }
                       else if($r == 0)
                       {
                            echo"<td>$s</td>";
                       }
                       else{
                            echo"<td>", $r*$s ,"</td>";
                       }
                        
                    }
                echo"</tr>";
                }
            ?>
        </table>


</body>
</html>