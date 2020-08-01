<?

$CategoryList = IPS_GetCategoryList();
sort($CategoryList);
$CatLists = "";

foreach ($CategoryList as $Category) {
    $CategoryName = IPS_GetName($Category);
    $CatLists.= $CategoryName;

    echo($CatLists);
}