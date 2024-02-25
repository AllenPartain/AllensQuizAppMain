      <!-- scienceQuiz.php -->
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Are You Smarter Than a 5th Grader?</title>
      </head>
      <body>
          <h1>Are You Smarter Than a 5th Grader?</h1>

          <h2>Science Questions</h2>
          <form action="check_science_answers.php" method="post">
             
                 <?php
                     $scienceQuestions = array(
                         "What is the boiling point of water in Celsius?",
                         "Which planet is known as the Red Planet?",
                         "What is the chemical symbol for gold?",
                         "What gas do plants absorb from the atmosphere?",
                         "What is the largest mammal in the world?",
                         "In physics, what is the SI unit of force?",
                         "Which gas do humans exhale when they breathe?",
                         "What is the process by which plants make their own food?",
                         "Which famous scientist developed the theory of general relativity?",
                         "What is the Earth's primary source of energy?",
                         "What is the smallest prime number?",
                         "What is the chemical formula for water?",
                         "In chemistry, what does the pH scale measure?",
                         "What is the largest ocean on Earth?",
                         "Which element has the chemical symbol Fe?",
                         "What is the speed of light in a vacuum?",
                         "Which gas makes up the majority of Earth's atmosphere?",
                         "What is the largest organ in the human body?",
                         "What is the process by which water vapor turns into liquid water?",
                         "Which gas is responsible for the Earth's ozone layer?"
                         // Add more science questions
                     );

                     $options = array(
                         array("100°C", "0°C", "50°C", "75°C"),
                         array("Venus", "Mars", "Jupiter", "Earth"),
                         array("Au", "Ag", "Fe", "O"),
                         array("Oxygen", "Carbon Dioxide", "Nitrogen", "Helium"),
                         array("Elephant", "Blue Whale", "Giraffe", "Panda"),
                         array("Watt", "Newton", "Joule", "Tesla"),
                         array("Oxygen", "Nitrogen", "Carbon Dioxide", "Helium"),
                         array("Photosynthesis", "Respiration", "Transpiration", "Chemosynthesis"),
                         array("Albert Einstein", "Isaac Newton", "Galileo Galilei", "Nikola Tesla"),
                         array("Solar Energy", "Wind Energy", "Nuclear Energy", "Geothermal Energy"),
                         array("2", "3", "5", "7"),
                         array("H2O", "CO2", "O2", "N2"),
                         array("Acidity", "Density", "Temperature", "Pressure"),
                         array("Pacific Ocean", "Atlantic Ocean", "Indian Ocean", "Southern Ocean"),
                         array("Gold", "Iron", "Silver", "Copper"),
                         array("299,792 kilometers per second", "150,000 kilometers per second", "100,000 kilometers per second", "Speed of sound"),
                         array("Nitrogen", "Oxygen", "Carbon Dioxide", "Argon"),
                         array("Liver", "Heart", "Brain", "Skin"),
                         array("Condensation", "Evaporation", "Sublimation", "Deposition"),
                         array("Oxygen", "Ozone", "Methane", "Nitrous Oxide")
                         // Add more sets of options for additional questions
                     );

                     for ($i = 0; $i < count($scienceQuestions); $i++) {
                         echo '<label for="science_question' . ($i + 1) . '">' . $scienceQuestions[$i] . '</label><br>';
                         echo '<select id="science_question' . ($i + 1) . '" name="science_question' . ($i + 1) . '">';

                         shuffle($options[$i]);

                         foreach ($options[$i] as $option) {
                             echo '<option value="' . $option . '">' . $option . '</option>';
                         }

                         echo '</select><br>';
                     }
                 ?>
             
              <input type="submit" value="Submit Science Answers">
          </form>
      </body>
      </html>

      
 