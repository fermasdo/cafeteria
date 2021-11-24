<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tíquet</title>
</head>
<body>

<?php
    echo "<h1> Imprimir tíquet</h1>";

    if ( isset($_POST['numTaula']) ){
        $numTaula = $_POST['numTaula'];
        echo "<h2> Taula número: $numTaula </h2>"; 
        
        // Forma no massa elegant de disposar de la informació
        include_once 'Bar.php';
        $bar = new Bar();
        
        $taules = $bar->getTaules();
        $taulaAMostrar = $taules[$numTaula];

        foreach ($taulaAMostrar->getProductes() as $producte){
            echo $producte->getNomProducte();
            echo " ";
            echo $producte->getPreuUnitat();
            echo "<br>";
            
        }
    }

?>
    
</body>
</html>