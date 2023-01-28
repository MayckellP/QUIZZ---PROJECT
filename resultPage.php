<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/swanky-and-moo-moo" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/syne" rel="stylesheet">
    <link rel="shortcut icon" href="media/images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="style/resultPage.css">
    <title>ZH | Result</title>
</head>
<body>
    <header>
    <?php include "includes/navbar.php"; ?>
    </header>
    <main class="result-header">
        <div class="result-title">
            <h3>You have obtained a score of: </h3>
            <h2>10 / 10</h2>
        </div>
        <div class="result-img">
        <img src="media/images/normal_Result.svg" alt="result">
        </div>
    </main>
    <div class="result-table">
        <h2 class="text-thanks">Thank you for answering this Quiz.</h2>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed accordion-" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Show result details
                    </button>
                </h2>
              <div id="collapseOne" class="accordion-collapse collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="t-headerN" scope="col">N°</th>
                              <th class="t-headerQ" scope="col">Questions</th>
                              <th class="t-headerA" scope="col">Answers</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th class="t-campN" scope="row">1</th>
                              <td class="t-campQ">What three parts are distinguished in the human body?</td>
                              <td class="t-campA">Head, legs and arms</td>
                            </tr>
                            <tr>
                              <th class="t-campN" scope="row">2</th>
                              <td class="t-campQ">What are the vital functions of human beings?</td>
                              <td class="t-campA">Reproduction, relationship and nutrition.</td>
                            </tr>
                            <tr>
                              <th class="t-campN" scope="row">3</th>
                              <td class="t-campQ">What is the name of the part of the body where two or more bones meet?</td>
                              <td class="t-campA">To relate to the world around us.</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
              </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <!-- BOOTSTRAP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>