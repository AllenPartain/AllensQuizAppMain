<?php
session_start();

function calculateScore($category, $totalQuestions) {
    $score = 0;

    for ($i = 1; $i <= $totalQuestions; $i++) {
        $key = "{$category}_question$i";

        if (isset($_SESSION[$key])) {
            $userAnswer = $_SESSION[$key];
            $correctAnswer = getCorrectAnswer($category, $i);

            if ($userAnswer == $correctAnswer) {
                $score++;
            }
        }
    }

    $percentage = ($score / $totalQuestions) * 100;
    echo "<p>{$category} Percentage: {$percentage}%</p>";

    return $percentage;
}

function getCorrectAnswer($category, $questionNumber) {
    // Assuming predefined correct answers for each category
    $correctAnswers = array(
        'math' => ["25", "4", "9", "16", "1", "36", "49", "64", "81", "100", "121", "144", "169", "196", "225", "256", "289", "324", "361", "400"],
        'science' => ["100°C", "Mars", "Au", "Oxygen", "Blue Whale", "Newton", "Carbon Dioxide", "Photosynthesis", "Galileo Galilei", "Solar Energy", "3", "H2O", "Temperature", "Pacific Ocean", "Gold", "299,792 kilometers per second", "Oxygen", "Liver", "Condensation", "Ozone"],
        'history' => ["George Washington", "Thomas Jefferson", "Abraham Lincoln", "Theodore Roosevelt", "Franklin D. Roosevelt", "Harry S. Truman", "Dwight D. Eisenhower", "John F. Kennedy", "Lyndon B. Johnson", "Richard Nixon", "Gerald Ford", "Jimmy Carter", "Ronald Reagan", "George H.W. Bush", "Bill Clinton", "George W. Bush", "Barack Obama", "Donald Trump", "Joe Biden", "Correct Answer"]
    );

    return $correctAnswers[$category][$questionNumber - 1] ?? "Correct Answer";
}

$totalQuestions = 60; // Total number of questions (20 math, 20 science, 20 history)
$mathScore = calculateScore("math", 20);
$scienceScore = calculateScore("science", 20);
$historyScore = calculateScore("history", 20);

$overallScore = ($mathScore + $scienceScore + $historyScore) / 3;

// Threshold for being considered "smarter than a 5th grader"
$passingThreshold = 70;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Stats</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Final Stats</h1>

    <h2>Overall Statistics</h2>
    <p>Total Questions: <?php echo $totalQuestions; ?></p>
    <p>Math Score: <?php echo $mathScore; ?></p>
    <p>Science Score: <?php echo $scienceScore; ?></p>
    <p>History Score: <?php echo $historyScore; ?></p>
    <p>Overall Score: <?php echo $overallScore; ?>%</p>

    <!-- Display Chart -->
    <canvas id="scoreChart" width="400" height="200"></canvas>

    <script>
        var ctx = document.getElementById('scoreChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Math', 'Science', 'History'],
                datasets: [{
                    label: 'Correct',
                    data: [<?php echo $mathScore; ?>, <?php echo $scienceScore; ?>, <?php echo $historyScore; ?>],
                    backgroundColor: 'rgba(75, 192, 75, 0.7)', // Green for correct answers
                    borderColor: 'rgba(75, 192, 75, 1)',
                    borderWidth: 1
                }, {
                    label: 'Incorrect',
                    data: [<?php echo 20 - $mathScore; ?>, <?php echo 20 - $scienceScore; ?>, <?php echo 20 - $historyScore; ?>],
                    backgroundColor: 'rgba(255, 99, 99, 0.7)', // Red for incorrect answers
                    borderColor: 'rgba(255, 99, 99, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- Display Bootstrap alert based on overall score -->
    <?php if ($overallScore >= $passingThreshold) : ?>
        <div class="alert alert-success" role="alert">
            Congratulations! You're smarter than a 5th grader!
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Oops! You're not smarter than a 5th grader.
        </div>
    <?php endif; ?>
    <a href="landingPage.php">More Quizes!</a>
    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
