<html>
<head></head>

<body>

<!-- Modal Trigger -->


<? 

$CategoryList = IPS_GetChildrenIDs(33603);

foreach ($CategoryList as $Category) {
    $CategoryName = IPS_GetName($Category);

    ?> <a class="waves-effect waves-light btn modal-trigger" href="#modal1"> <? echo($CategoryName); ?></a>
    
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4> <? echo($CategoryName); ?> </h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
    
    <?
} 
?>





<!-- Modal Structure -->



</body>

</html>





