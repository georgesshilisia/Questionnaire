<?php session_start();?>
<?php include 'database.php'?>
<?php
//Set question number
$number=(int)$_GET['n'];

/*
    *Get the total questions
 */
$query="SELECT*FROM `questions`";

//Get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

/*
 * Get the Question
 */
$query="SELECT* FROM questions
             WHERE question_number=$number";

//Get Result
$result=$mysqli->query($query)or die($mysqli->error.__LINE__);

$question=$result->fetch_assoc();

/*
 * Get Choices
 */
$query="SELECT* FROM choices
             WHERE question_number=$number";
//Get Result
$choices=$mysqli->query($query)or die($mysqli->error.__LINE__);

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
            <div class="current">Question <?php echo $question['question_number'];?> of <?php echo $total;?></div>
            <p class="question">
                <?php echo $question['text'];?>
            </p>
            <form method="post" action="process.php">
                <ul class="choices">

                    <?php while($row=$choices->fetch_assoc()):?>
                        <li><input name="choice" type="radio" value=<?php echo $row['id'];?> /><?php echo $row['text'];?></li>
                    <?php endwhile;?>

                </ul>
                <input type="submit" value="submit" />
                <input type="hidden" name="number" value="<?php echo $number?>" />
            </form>
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
