<?php
    include "tools.php"; 
    $dbName = getenv('DB_NAME');
    $dbHost = getenv('DB_HOST');
    $dbUser = getenv('DB_USER');
    $dbPassword = getenv('DB_PASSWORD');

    $dbConection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
    $dbConection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $buscador = $_POST;
    prettyPrint($buscador);
    $res;
    $money;


    //VALIDATION EMPTY
    if(array_key_exists('currency', $buscador)){
        //SEARCH CURRENCY
        $money = $buscador['currency'];
        $res = $dbConection->query("SELECT * FROM `books` WHERE `currency` = '$money'");
        if(array_key_exists('genre', $buscador)){
            //SEARCH GENRE
            $gen = $buscador['genre'];
            $res = $dbConection->query("SELECT * FROM `books` WHERE `currency` = '$money' AND `genre` = '$gen'"); 
        }
        if(array_key_exists('new', $buscador)){
            //SEARCH USED OR NEW
            $res = $dbConection->query("SELECT * FROM `books` WHERE `currency` = '$money'  AND `used` = '0' AND `genre` = '$gen'"); 
        }
        if(array_key_exists('used', $buscador)){
            //SEARCH USED OR NEW
            $res = $dbConection->query("SELECT * FROM `books` WHERE `currency` = '$money'  AND `used` = '1' AND `genre` = '$gen' OR `used` = '0'"); 
        }
        showTable();
    }
    echo $money;
    
    //SHOW DATABANKEN 
    function showTable(){
        $rowTitle = $GLOBALS['res']->fetch(PDO::FETCH_ASSOC);
        echo 
        "<table class='table table-striped'>";
            for($i = 0; $i < sizeof($rowTitle); $i++){
                echo 
                "<th class='table-info'>".strtoupper(array_keys($rowTitle)[$i])."</th>";
            }
            echo "
                <th colspan ='2' class='table-info'>ACTIONS</th>
            <tr>";
            foreach($rowTitle as $column => $value){
                echo 
                "<td class='camp'>".$value."</td>";

            }
            echo "
            <td class='camp'>Edit</td>
            <td class='camp'>Delete</td>
            </tr>"; 
        while($row = $GLOBALS['res']->fetch(PDO::FETCH_ASSOC)){
            echo"
                <tr>";
            foreach($row as $column => $value){
                echo "<td class='camp'>$value</td>";
            }
            echo "
                <td class='camp'>Edit</td>
                <td class='camp'>Delete</td>
            </tr>";
        }
        echo 
            "</tr>
        <table>";
    }
    

?>