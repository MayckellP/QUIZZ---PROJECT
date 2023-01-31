<?php
session_start();
include "includes/db.php";
include "includes/tools.php";
include "includes/data-collector.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/swanky-and-moo-moo" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/syne" rel="stylesheet">
    <link rel="shortcut icon" href="media/images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="style/questionsPage.css">
    <link rel="shortcut icon" href="media/images/newLogo.svg" type="image/x-icon">
    <title>ZH | Question <?php echo $indexPage;?></title>
</head>
<body>
    <header>
        <?php include "includes/navbar.php";?>
    </header>
    <main class="cont-general">
        <div class="register-slider">
            <img src="media/icons/scientist.png" alt="scienceOption" class="register-img">
            <div class="cont-tl">
                <h2 class="title">Science</h2><br>
                <h3 class="count">Question:</h3>
                <?php echo 
                "<h3 class='count'>"
                .$_POST['indexPage']." / ".$_SESSION['limit']. 
                "</h3>";
                ?>
            </div>
        </div>
        <div class="form-main">   
                <?php 
                    echo "<h2 class='question'>-".$question['question_text']."</h2>";
                    $page = "";
                    if($_POST['indexPage'] < $_SESSION['limit']){
                        $page = "questionsPage.php";
                    } else{
                        $page = "resultPage.php";
                    }
                    echo 
                    "<form action=".$page." method='POST' onsubmit='return choosed();'>";
                            $option = 0;
                            for($i=1; $i <= 5; $i++){
                                $answer = "answer-".$i;
                                if(isset($question[$answer])){
                                    if($correctAnswer === $answer){ 
                                        $value = 1;
                                        $option = $i;
                                    }else{
                                        $value = 0;
                                    }
                                    echo "<div class='option'>
                                            <input type='radio' id=".$answer." class='check-input' name='answer' value=".$value.">
                                            <label class='check-answer' for=".$answer.">
                                                ".$question[$answer]."
                                            </label>
                                        </div>";
                                }
                            }
                            $questionAnswer = "chossed-".$indexPage;
                            echo "<input type='hidden' id='collector-questions' name=".$questionAnswer.">";
                            $indexPage++;
                            echo "<input type='hidden' id='indexPage' value=".$indexPage." name='indexPage'>
                            ";
                    ?>
                    <p id="camp-validate"><p>
                <?php include "includes/footer.php"; ?>
            </form>
        </div>
    </main>
     <!-- BOOTSTRAP SCRIPT -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="js/validation.js"></script>
</body>
</html>