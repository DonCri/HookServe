<?

$TESTParent = IPS_GetParent(43646);
$TESTname = IPS_GetName($TESTParent);
$TEST = GetValueFormatted(43646);

echo ("$TESTname ->" . " $TEST");