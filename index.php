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
    <link rel="stylesheet" href="style/index.css">
    <title>ZH | Home</title>
  </head>
  <body>
  <header>
    <div class="cont-nav">
    <?php include "includes/navbar.php";?>
    </div>
  </header>
    <div class="trasfondo">
      <div class="fondo">
        <img src="media/images/fondo_Home.svg" alt="fondo_1" class="fondo1">
        <h1>ZH - QUIZZ</h1>
      </div>
      <div class="startForm">
          <form action="" method="POST">
              <label>Choose your Theme:</label>
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Open this select menu</option>
                <option value="Science">Science
                  <img src="media/icons/scientist.png" alt="science">
                </option>
                <option value="Geography">Geography
                  <img src="media/icons/geography.png" alt="geography">
                </option>
                <option value="Logic">Basic Logic
                  <img src="media/icons/critical-thinking.png" alt="logic">
                </option>
                <option value="CSS">CSS (Web Dev.)
                  <img src="media/icons/web-design.png" alt="css">
                </option>
                <option value="Javascript">Javascript (Web Dev.)
                  <img src="media/icons/Javascript.png" alt="js">
                </option>
              </select>
                <label>Number of Questions:</label><br>
                <input type="number" name="number" id="number" class="number" min="0" max="10">
          </form>
          <img src="media/images/question_Home.svg" alt="question_Home" class="img-question">
      </div>
    </div>
    
    <?php include "includes/footer.php"; ?>
    <!-- BOOTSTRAP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>