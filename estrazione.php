<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1 class="fontSize">ESTRAZIONE NUMERI</h1>
            <div class="center">
                <?php
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

                  echo "<button class='button' onclick=randomNumbers();> Estrai </button>";


                  

                ?>
            </div>
            <form action="schedine.php" method="GET">
                <button type="submit" class="button">Segna schedina</button>
            </form>
        </body>
</div>
</html>