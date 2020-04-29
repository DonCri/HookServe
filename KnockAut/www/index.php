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

<div id="content">
<?php
$CategoryList = IPS_GetCategoryList();
sort($CategoryList);

$Var = "";

foreach($CategoryList as $Category)  ?>
    <div id="content">
    <?php $CatName = IPS_GetName($Category);
    $Var .= $Category . " -> " . $CatName . "<br>"; 
    ?>
    </div>

<?php echo $Var;
?>
</div>

</body>
</html>
