<?

$CategoryList = IPS_GetCategoryList();
sort($CategoryList);

foreach ($CategoryList as $Category) {
    $CategoryName = IPS_GetName($Category);
    $CatLists.= $CategoryName;

    echo($CatLists);
}