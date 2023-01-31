<?php
    $_SESSION += $_POST;
    $indexPage = $_POST['indexPage'];
    showQuestion($indexPage);
    $correctAnswer = $question['correct']; 
    $score = $_POST['answer'];
    $_SESSION['score'] += $score;
?>