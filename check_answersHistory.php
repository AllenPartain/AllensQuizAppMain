<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>Results</h1>

    <?php
    if (isset($_SESSION['history_answers'])) {
        $historyAnswers = $_SESSION['history_answers'];

        $correctAnswers = array(
            "George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe",
            "John Quincy Adams", "Andrew Jackson", "Martin Van Buren", "William Henry Harrison", "John Tyler",
            "James K. Polk", "Zachary Taylor", "Millard Fillmore", "Franklin Pierce", "James Buchanan", "Abraham Lincoln",
            "Andrew Johnson", "Ulysses S. Grant", "Rutherford B. Hayes", "James A. Garfield"
            // Add the rest of the Presidents
        );

        for ($i = 1; $i <= 20; $i++) {
            $userAnswer = isset($historyAnswers["history_question$i"]) ? $historyAnswers["history_question$i"] : '';
            $correctAnswer = $correctAnswers[$i - 1];
            $isCorrect = ($userAnswer == $correctAnswer);

            echo '<p>History question ' . $i . ' answer: ' . $userAnswer . ', correct answer: ' . $correctAnswer . '</p>';
            echo '<p>Comparison result: ' . var_export($isCorrect, true) . '</p>';
            echo '<hr>';

            echo '<p>History question ' . $i . ' answer: ' . ($isCorrect ? "Correct" : "Incorrect. The correct answer is " . $correctAnswer) . "</p>\n";
        }
    } else {
        echo '<p>No history answers found in session.</p>';
    }
    ?>

    <a href="scienceQuiz.php">Next Quiz: Science Quiz</a>
</body>
</html>
