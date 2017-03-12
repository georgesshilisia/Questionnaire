<?php include 'database.php'?>
<?php
/*
 * Get the total number of questions
 */
$query="SELECT * FROM questions";

//Get the results
$results=$mysqli->query($query)or die($mysqli_error.__LINE__);
$total =$results->num_rows;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title>Questionnaire</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
    <header>
        <div class="container">
            <h1>Questionnaire</h1>
        </div>

        <main>
            <div class="container">
                <h2>Your Knowledge</h2>
                <p>This is a multiple choice quiz to test your knowledge</p>
                <ul>
                    <li><strong>Number of Questions: </strong><?php echo $total;?></li>
                    <li><strong>Type: </strong>Multiple Choice</li>
                    <li><strong>Estimated Time: </strong><?php echo $total*.5;?></li>
                </ul>
                <a href="question.php?n=1" class="start" >Start Quiz</a>
            </div>
        </main>

        <footer>
            <div class="container">
                Copyright &copy; 2017, Questionnaire
            </div>
        </footer>
    </header>
    </body>
</html>
