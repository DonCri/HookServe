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

        $Var = "";

        foreach($CategoryList as $Category) { 
        
            $CatName = IPS_GetName($Category);?>
            <a href="#dialog"><div id="content"> 
            <?php $Var = $CatName; 
            echo $Var; ?>
            </a></div>
    <?php } ?>
</div>

<div>



<dialog id="dialog">
<? 
$GetInstance = IPS_GetChildrenIDs(IPS_GetCategoryIDByName($Var, 33603));
$Inst = "";

    foreach($GetInstance as $InstanceID) {
    $InstName = IPS_GetName($InstanceID); ?>
    
    <div> <?
    $Inst = $InstName;

    echo $Inst; ?> </div>
<? } ?>
</dialog>

</div>



</body>
</html>
