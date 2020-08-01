<?

$CategoryList = IPS_GetChildrenIDs(33603);
$CatLists = "";

foreach ($CategoryList as $Category) {
    $CategoryName = IPS_GetName($Category);

    echo("$CategoryName <br>");
}

$TEST = '<p id="output"></p>';

echo $TEST;