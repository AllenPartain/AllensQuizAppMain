<!-- scienceHandler.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a function to save the data to a database or file
    saveScienceAnswers($_POST);

    // Redirect to the final stats page
    header("Location: finalStats.php");
    exit();
} else {
    // Redirect to the main page if accessed directly without POST data
    header("Location: scienceQuiz.php");
    exit();
}

function saveScienceAnswers($postData) {
    // Implement your logic to save the data
    // Example: Save data to a file
    $file = 'science_answers.txt';
    file_put_contents($file, print_r($postData, true), FILE_APPEND | LOCK_EX);

    // Store the science answers in the session for later use
    $_SESSION['science_answers'] = $postData;
}
?>
