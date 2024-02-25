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
    if (isset($_SESSION['math_answers'])) {
        $mathAnswers = $_SESSION['math_answers'];

        for ($i = 1; $i <= 20; $i++) {
            $userAnswer = isset($mathAnswers["math_question$i"]) ? $mathAnswers["math_question$i"] : '';
            $correctAnswer = $i * $i;

            echo '<p>Question ' . $i . ' answer: ' . $userAnswer . ', correct answer: ' . $correctAnswer . '</p>';
            echo '<p>Comparison result: ' . var_export((int)$userAnswer === $correctAnswer, true) . '</p>';
            echo '<hr>';

            echo '<p>Question ' . $i . ' answer: ' . ((int)$userAnswer === $correctAnswer ? "Correct" : "Incorrect. The correct answer is " . $correctAnswer) . "</p>\n";
        }
    } else {
        echo '<p>No math answers found in session.</p>';
    }
    ?>

    <a href="historyQuiz.php">Next Quiz: History Quiz</a>
</body>
</html>
