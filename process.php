<?php include 'database.php';?>
<?php session_start();?>
<?php
//Check to see if the score is set_error_handler
if(!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}
/*
    *Get the total questions
 */
$query="SELECT*FROM `questions`";

//Get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

if($_POST){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next= $number+1;

    /*
    *Get the correct choice
     */
    $query="SELECT*FROM `choices`
                 WHERE question_number =$number AND is_correct=1";

    //Get the query and put it in the result variable

    $result= $mysqli->query($query) or die($mysqli->error.__LINE__);

    //Get a row
    $row= $result->fetch_assoc();

    //Set the correct choice
    $correct_choice = $row['id'];

    //Compare
    if($correct_choice == $selected_choice){
        //answer is correct
        $_SESSION['score']++;
    }

    //Check if its the last question
    if($number==$total){
        header("Location:final.php");
        exit();
    }
    else{
        header("Location:question.php?n=".$next);
    }

}
?>
