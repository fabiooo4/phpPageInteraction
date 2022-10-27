<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1 class="fontSize">MEGA TOMBOLATA</h1>
            <div class="center">
                <?php
                    $nome = $_GET["nome"];
                    $cognome = $_GET["cognome"];
                    $nomeBattello = $_GET["nomeBattello"];
                    $dataPartenza = $_GET["dataPartenza"];

                    function randomNumbers ($amount, $min, $max) {
                        $randomNumbers = array();
                        $i = 0;
                        while($i < $amount){
                            $randomNumber = rand($min, $max);
                            if(!in_array($randomNumber, $randomNumbers)){
                                $randomNumbers[$i] = $randomNumber;
                                $i++;
                            }
                        }
                        return $randomNumbers;
                    }

                    function generateSheet ($rows, $columns, $numbers) {
                        echo "<table border='10'>";

                        $spaces = randomNumbers(($rows * $columns) - 15, 1, 27);
                        for ($j=0; $j < count($spaces); $j++) { 
                            //echo $spaces[$j];
                            $numbers[$spaces[$j]] = "";
                        }

                        $i = 0;
                        for($tr=1;$tr<=$rows;$tr++){

                            echo "<tr>";
                                for($td=1;$td<=$columns;$td++){
                                    if ($i % 2 == 0) {
                                        echo "<td class='tableCells'>". $numbers[$i] ."</td>";
                                    }else {
                                        echo "<td class='tableCells'>". $numbers[$i] ."</td>";
                                    }
                                    $i++;
                                }
                            echo "</tr>";
                        }

                        echo "</table>";
                    }

                    generateSheet(3, 9, randomNumbers(27, 1, 90));
                    
                ?>
            </div>
            <form action="" method="get">
                <button type="submit" class ="button">Genera nuova schedina</button>
            </form>
        </body>
</div>
</html>