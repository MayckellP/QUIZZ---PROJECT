<div class="button fixed-bottom mb-3">
  <?php
    if($_SERVER['REQUEST_URI'] === "/questionsPage.php"){
      echo 
      "<a href='index.php'><button type='button' class='btn me-3'>
      Home
      </button></a>
      <button type='submit' class='btn'>
      Next
      </button>";
    }
    elseif($_SERVER['REQUEST_URI'] === "/index.php"){
      echo 
      "<button type='submit' class='btn'>
      Start
      </button>";
    }
    elseif($_SERVER['REQUEST_URI'] === "/resultPage.php"){
      echo "<a href='index.php'><button type='submit' class='btn'>
      Restart
      </button></a>";
    }
  ?>
      
</div>