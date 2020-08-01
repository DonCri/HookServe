<?

$CategoryList = IPS_GetCategoryList(33603);
sort($CategoryList);
$CatLists = "";

foreach ($CategoryList as $Category) {
    $CategoryName = IPS_GetName($Category);
    $CatLists.= $CategoryName;

    echo($CatLists);
}