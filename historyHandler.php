<?php
// Start the session at the very beginning
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a function to save the data to a database or file
    saveHistoryAnswers($_POST);

    // Redirect to the next quiz
    header("Location:/check_answersHistory.php");
    exit();
} else {
    // Redirect to the main page if accessed directly without POST data
    header("Location: historyQuiz.php");
    exit();
}

function saveHistoryAnswers($postData) {
    // Implement your logic to save the data
    // Example: Save data to a session variable
    $_SESSION['history_answers'] = $postData;
}
?>
