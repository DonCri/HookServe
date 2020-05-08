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
   $('.tabs').tabs();
 });</script>

</head>

<body>

<?php
        include ('ws/websocket.html');
    ?>

<div id="titelbalken">
    <div id="titel">Meine eigene Visualisierung</div>
    <div id="titelUpdate"> <p><a href="module_update.php"><img id="ModuleUpdate" src="img/update_v2.png"></a></p> </div>
</div>

<div id="nav">

    <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
        <li class="tab"><a class="active" href="#test1">My House</a></li>
        <li class="tab"><a href="#test2">Test 2</a></li>
        <li class="tab"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
        <li class="tab"><a href="#test0">Test 5</a></li>
    </ul>
    <div id="test1" class="col s12">
                                                    <p id="content"> <?php
                                                        $CategoryList = IPS_GetChildrenIDs(33603);
                                                        $Var = "";

                                                        foreach($CategoryList as $Category) { 
                                                        
                                                            $CatName = IPS_GetName($Category);
                                                            $Var = $CatName;?>

                                                            <div id="content" class="col s12">
                                                                            <!-- Modal Trigger -->
                                                                            <button id="modalStyle" data-target="modal1" class="btn modal-trigger"> <?php echo $Var; ?></button>
                                                            </div>
                                                    <?php } ?> </p>
        </div>
    <div id="test2" class="col s12"><p>Test 2</p></div>
    <div id="test3" class="col s12"><p>Test 3</p></div>
    <div id="test4" class="col s12"><p>Test 4</p></div>
    <div id="test0" class="col s12"><p>Test 5</p></div>
</div>






<!-- Test für ein automatisch generierter Inhalt vom Modal -->

                <div>
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4> <?php echo $Var; ?> </h4>
                            <div> <?php
                                    $InstanceList = IPS_GetChildrenIDs($CategoryList[0]);
                                    $Inst = ""; 

                                    var_dump($CategoryList);

                                    foreach($InstanceList as $Instance) { 
                                    
                                        $InstanceName = IPS_GetName($Instance);
                                        $Inst = $InstanceName; 
                                        echo $Inst; } 
                                ?> </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Schliessen</a>
                        </div>
                    </div>          
                </div>
 

<!-- <div id="output"> --> <!-- Ist der Output vom Websocket -->

<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
