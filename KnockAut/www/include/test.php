<?php

$CategoryList = IPS_GetCategoryList();
sort($CategoryList);

$Var = "";

foreach($CategoryList as $Category) {
    $CatName = IPS_GetName($Category);
    $Var .= $Category . " -> " . $CatName . "<br>";
}

echo $Var;