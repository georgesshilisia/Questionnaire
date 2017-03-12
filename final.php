<?php session_start();?>
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
            <h2>You're Done</h2>
            <p>Congrats you have completed the test</p>
            <p>Final Score :<?php echo $_SESSION['score'];?></p>
            <a href="question.php?n=1" class="start">Take Again</a>
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
