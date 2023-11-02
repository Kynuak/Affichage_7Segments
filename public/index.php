<?php
    session_start();
    require 'ActiveSegments.php';
    $selectNumber = 0;;
    $error = "";
    if(!empty($_POST)) {
        if($_POST["number"] < 0 || $_POST["number"] > 9) {
            $error = "Veuillez sélectionner un chiffre entre 1 et 9";
        }
        if(empty($error)){
           $selectNumber = intval($_POST["number"]); 
        }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <div class="ensemble">
            <div class="segment segment1 segment_horizontal">
                <div class="triangle1  <?php if(activeSegment($selectNumber, "segment1")){ echo "segment_actif";}?>"></div>
                <div class="trait  <?php if(activeSegment($selectNumber, "segment1")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment1")){ echo "segment_actif";}?>"></div>
            </div>

            <div class="segment segment2 segment_vertical ">
                <div class="triangle1 <?php if(activeSegment($selectNumber, "segment2")){ echo "segment_actif";}?>"></div>
                <div class="trait <?php if(activeSegment($selectNumber, "segment2")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment2")){ echo "segment_actif";}?>"></div>
            </div>

            <div class="segment segment3 segment_vertical">
                <div class="triangle1 <?php if(activeSegment($selectNumber, "segment3")){ echo "segment_actif";}?>"></div>
                <div class="trait <?php if(activeSegment($selectNumber, "segment3")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment3")){ echo "segment_actif";}?>"></div>
            </div>

            <div class="segment segment4 segment_horizontal">
                <div class="triangle1 <?php if(activeSegment($selectNumber, "segment4")){ echo "segment_actif";}?>"></div>
                <div class="trait <?php if(activeSegment($selectNumber, "segment4")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment4")){ echo "segment_actif";}?>"></div>
            </div>

            <div class="segment segment5 segment_vertical">
                <div class="triangle1 <?php if(activeSegment($selectNumber, "segment5")){ echo "segment_actif";}?>"></div>
                <div class="trait <?php if(activeSegment($selectNumber, "segment5")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment5")){ echo "segment_actif";}?>"></div>
            </div>

            <div class="segment segment6 segment_vertical">
                <div class="triangle1 <?php if(activeSegment($selectNumber, "segment6")){ echo "segment_actif";}?>"></div>
                <div class="trait <?php if(activeSegment($selectNumber, "segment6")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment6")){ echo "segment_actif";}?>"></div>
            </div>

            <div class="segment segment7 segment_horizontal">
                <div class="triangle1 <?php if(activeSegment($selectNumber, "segment7")){ echo "segment_actif";}?>"></div>
                <div class="trait <?php if(activeSegment($selectNumber, "segment7")){ echo "segment_actif";}?>"></div>
                <div class="triangle2 <?php if(activeSegment($selectNumber, "segment7")){ echo "segment_actif";}?>"></div>
            </div>
        </div>
    </main>

    <form method="POST">
        <label for="number">Sélectionner un chiffre : </label>
        <input type="number" name="number" id="number" value="<?= $selectNumber ?>"><br>
        <?php if(!empty($error)) { echo $error."<br>";} ?>
        <button type="submit">Valider le chiffre !</button>
    </form>



</body>
</html>