<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are You Smarter Than a 5th Grader?</title>
</head>
<body>
    <h1>Are You Smarter Than a 5th Grader?</h1>

    <h2>Math Questions</h2>
    <form action="testHandler.php" method="post">
        <?php
            for ($i = 1; $i <= 20; $i++) {
                echo '<label for="math_question' . $i . '">Question ' . $i . ': What is ' . $i . ' x ' . $i . '?</label><br>';
                echo '<input type="text" id="math_question' . $i . '" name="math_question' . $i . '"><br>';
            }
        ?>
        <input type="submit" value="Submit Math Answers">
    </form>
</body>
</html>
