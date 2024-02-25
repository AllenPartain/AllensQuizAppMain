<!-- check_science_answers.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Quiz Results</title>
</head>
<body>
    <h1>Science Quiz Results</h1>
    <?php
        $correctAnswers = array(
            'math' => ["25", "4", "9", "16", "1", "36", "49", "64", "81", "100", "121", "144", "169", "196", "225", "256", "289", "324", "361", "400"],
            'science' => ["100°C", "Mars", "Au", "Oxygen", "Blue Whale", "Newton", "Carbon Dioxide", "Photosynthesis", "Galileo Galilei", "Solar Energy", "3", "H2O", "Temperature", "Pacific Ocean", "Gold", "299,792 kilometers per second", "Oxygen", "Liver", "Condensation", "Ozone"],
            'history' => ["George Washington", "Thomas Jefferson", "Abraham Lincoln", "Theodore Roosevelt", "Franklin D. Roosevelt", "Harry S. Truman", "Dwight D. Eisenhower", "John F. Kennedy", "Lyndon B. Johnson", "Richard Nixon", "Gerald Ford", "Jimmy Carter", "Ronald Reagan", "George H.W. Bush", "Bill Clinton", "George W. Bush", "Barack Obama", "Donald Trump", "Joe Biden", "Correct Answer"]
        );

        for ($i = 1; $i <= 20; $i++) {
            $userAnswer = isset($_POST["science_question$i"]) ? $_POST["science_question$i"] : '';
            $correctAnswer = $correctAnswers['science'][$i - 1];
            $isCorrect = ($userAnswer == $correctAnswer);

            echo '<p>Science question ' . $i . ' answer: ' . ($isCorrect ? "Correct" : "Incorrect. The correct answer is " . $correctAnswer) . "</p>\n";
        }
    ?>
    <a href="finalStats.php">See Your Stats!</a>
</body>
</html>
