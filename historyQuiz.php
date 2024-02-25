<!-- historyQuiz.php -->
<h2>History Questions</h2>
<form action="historyHandler.php" method="post">
    <?php
        $presidents = array("George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe", "John Quincy Adams", "Andrew Jackson", "Martin Van Buren", "William Henry Harrison", "John Tyler", "James K. Polk", "Zachary Taylor", "Millard Fillmore", "Franklin Pierce", "James Buchanan", "Abraham Lincoln", "Andrew Johnson", "Ulysses S. Grant", "Rutherford B. Hayes", "James A. Garfield");

        for ($i = 1; $i <= 20; $i++) {
            echo '<label for="history_question' . $i . '">Question ' . $i . ': Who was the ' . $i . 'th President of the United States?</label><br>';
            echo '<input type="text" id="history_question' . $i . '" name="history_question' . $i . '" list="presidents"><br>';
        }
    ?>
    <datalist id="presidents">
        <?php
            foreach ($presidents as $president) {
                echo '<option value="' . $president . '">';
            }
        ?>
    </datalist>
    <input type="submit" value="Submit History Answers">
</form>