<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
            <!--Make this into a navbar for the different parts of the lab-->
            <a href="../../index.html"><img src="../../homeicon.png"></a>
            <a href="../Exercise 1/index.php">Exercise 1</a>
            <a class="active" href="index.html">Exercise 2</a>
            <a href="../Exercise 3/index.html">Exercise 3</a>
            <a href="../index.html">Exercise 4</a>
            <!--Make these buttons on the navbar to navigate to the folders-->
        </div>
    <div class="answers">
    <?php
            
            $answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];
        
            $totalCorrect = 0;
            
            echo"<p class='question'>Question 1: Do it bool?</p>";

            if ($answer1 == "yes") {
                 $totalCorrect++; 
                echo"<p class='correct'>Correct Answer: Yes</p>";
            }
            else{
                echo"<p class='correct'>Correct Answer: Yes</p>";
                echo"<p class='incorrect'>Your Answer: $answer1</p>";
            }

            echo"<br>";

            echo"<p class='question'>Question 2: What is 2+2?</p>";

            if ($answer2 == "4") {
                $totalCorrect++; 
               echo"<p class='correct'>Correct Answer: 4</p>";
            }
            else{
               echo"<p class='correct'>Correct Answer: 4</p>";
               echo"<p class='incorrect'>Your Answer: $answer2</p>";
            }

            echo"<br>";

            echo"<p class='question'>Question 3: If we take the derivative of x^2, what is the result?</p>";

            if ($answer3 == "2x") {
                $totalCorrect++; 
               echo"<p class='correct'>Correct Answer: 2x</p>";
           }
           else{
               echo"<p class='correct'>Correct Answer: 2x</p>";
               echo"<p class='incorrect'>Your Answer: $answer3</p>";
           }    

           echo"<br>";
           
           echo"<p class='question'>Question 4: What is the address of Eaton Hall?</p>";

            if ($answer4 == "1520 W 15th St") {
            $totalCorrect++; 
           echo"<p class='correct'>Correct Answer: 1520 W 15th St</p>";
            }
            else{
           echo"<p class='correct'>Correct Answer: 1520 W 15th St</p>";
           echo"<p class='incorrect'>Your Answer: $answer4</p>";
            }    

            echo"<br>";

            echo"<p class='question'>Question 5: Where can you find the ip of your computer in linux command line?</p>";
            
            if ($answer5 == "ifconfig") {
                    $totalCorrect++; 
                echo"<p class='correct'>Correct Answer: ifconfig</p>";
            }
            else{
                echo"<p class='correct'>Correct Answer: ifconfig</p>";
                echo"<p class='incorrect'>Your Answer: $answer5</p>";
            }

            echo"<hr>";
            
            echo "<h3>$totalCorrect / 5 correct</h3>";
            echo"<h3>",($totalCorrect/5)*100,"% correct</h3>";
            
    ?>
        
    </div>
</body>
</html>