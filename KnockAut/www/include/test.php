<?php

$CategoryList = IPS_GetCategoryList();

$Var = "";

foreach($CategoryList as $Category) {
    $CatName = IPS_GetName($Category);
    sort($Category);
    $Var .= $Category . " -> " . $CatName . "<br>";
}

echo $Var;