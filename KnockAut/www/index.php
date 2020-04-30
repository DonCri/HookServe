<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Test eigene Visualisierung</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="titelbalken">
    <div id="titel">My House</div>
    <div id="titelUpdate"> <p><a href="module_update.php"><img id="ModuleUpdate" src="img/update_v2.png"></a></p> </div>
</div>

<div id="nav">
    <?php
        $CategoryList = IPS_GetChildrenIDs(33603);
        sort($CategoryList);

        $Var = "";

        foreach($CategoryList as $Category) { 
        
            $CatName = IPS_GetName($Category);?>
            <a href="include/<?php echo($CatName . ".php")?>"><div id="content"> 
            <?php $Var = $CatName; 
            echo $Var; ?>
            </a></div>
    <?php } ?>
</div>


</body>
</html>
