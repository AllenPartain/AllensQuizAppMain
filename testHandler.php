<?php
// Start the session at the very beginning
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a function to save the data to a database or file
    saveMathAnswers($_POST);

    // Redirect to the results page
    header("Location: check_answers.php");
    exit();
} else {
    // Redirect to the main page if accessed directly without POST data
    header("Location: index.php");
    exit();
}

function saveMathAnswers($postData) {
    // Save the data in the session
    $_SESSION['math_answers'] = $postData;
}
?>
