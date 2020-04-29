<?php

$CategoryList = IPS_GetCategoryList();

$Var = "";

foreach($CategoryList as $Category) {
    $CatName = IPS_GetName($Category);
    $Var .= $Category . " -> " . $CatName . "<br>";
}

echo $Var;