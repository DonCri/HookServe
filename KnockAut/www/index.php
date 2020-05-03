<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Test eigene Visualisierung</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

<script> $(document).ready(function(){
   $('.modal').modal();
 });</script>

 <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>

</head>

<body>

<?php
        include('ws/websocket.html');
    ?>

<div id="titelbalken">
    <div id="titel">My House</div>
    <div id="titelUpdate"> <p><a href="module_update.php"><img id="ModuleUpdate" src="img/update_v2.png"></a></p> </div>
</div>

<div id="nav">
    <?php
        $CategoryList = IPS_GetChildrenIDs(33603);
        $Var = "";

        foreach($CategoryList as $Category) { 
        
            $CatName = IPS_GetName($Category);
            $Var = $CatName;?>

            <div id="content">
                            <!-- Modal Trigger -->
                            <button id="modalStyle" data-target="modal1" class="btn modal-trigger"> <?php echo $Var; ?> </button>
            </div>
    <?php } ?>
</div>

<!-- Modal Structure -->



                <div>
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4> <?php echo $Var; ?> </h4>
                            <p> <?php
                                    $CategoryList2 = IPS_GetChildrenIDs(IPS_GetCategoryIDByName($Var, 33603));
                                    $Var2 = "";

                                    foreach($CategoryList2 as $Category2) { 
                                    
                                        $CatName2 = IPS_GetName($Category2);
                                        $Var2 = $CatName2; ?>
                                        <div> <?php echo $Var2; } 
                                ?> </div> </p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Schliessen</a>
                        </div>
                    </div>          
                </div>
 

<!-- <div id="output"> -->
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
