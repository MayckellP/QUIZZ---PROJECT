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
    <title>ZH | Question 1</title>
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
            <h3 class="count">1 / 10</h3>
            </div>
        </div>
        <div class="form-main">
            <h2 class="question">-What three parts are distinguished in the human body?</h2>
            <form action="" method="POST">
                <div class="option">
                    <input type="radio" name="answer1" id="answer1" class="check-input">
                    <label class="check-answer" for="answer1">Head, legs and arms.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" id="answer2" class="check-input">
                    <label class="check-answer" for="answer2">Body, legs and arms.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" id="answer3" class="check-input">
                    <label class="check-answer" for="answer3">Heads, trunk and extremities.</label>
                </div>
            </form>
            <?php include "includes/footer.php"; ?>
        </div>
    </main>
     <!-- BOOTSTRAP SCRIPT -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>