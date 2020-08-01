<?

$CategoryList = IPS_GetChildrenIDs(33603);
$CatLists = "";

foreach ($CategoryList as $Category) {
    $CategoryName = IPS_GetName($Category);
    // $CatLists.= $CategoryName;

    echo("$CategoryName <br>");
}