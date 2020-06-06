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
    <div id="titel">Meine eigene Visualisierung_v2</div>
    <div id="titelUpdate"> <p><a href="module_update.php"><img id="ModuleUpdate" src="img/update_v2.png"></a></p> </div>
</div>

<div id="nav" class="container">

    <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
        <li class="tab"><a class="active" href="#test1">My House</a></li>
        <li class="tab"><a href="#test2">Monitor</a></li>
        <li class="tab"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
        <li class="tab"><a href="#test0">Test 5</a></li>
    </ul>
    <div id="test1" class="col s12">
                                                    <p id="content"> <?php
                                                        $CategoryList = IPS_GetChildrenIDs(33603);

                                                        foreach($CategoryList as $Category) { 
                                                        
                                                            $CatName = IPS_GetName($Category); ?>

                                                            <div id="content">
                                                                            <!-- Modal Trigger -->
                                                                            <button id="modalStyle" data-target="modal1" class="btn modal-trigger"> <?php echo $CatName; ?></button>
                                                            </div>  
                                                            <?php } ?> </p>
        </div>
    <div id="test2" class="col s12"><p><button id="modalStyle" data-target="modal2" class="btn modal-trigger"> WebSocket</button></p></div>
    <div id="test3" class="col s12"><p>Test 3</p></div>
    <div id="test4" class="col s12"><p>Test 4</p></div>
    <div id="test0" class="col s12"><p>Test 5</p></div>
</div>






<!-- Test für ein automatisch generierter Inhalt vom Modal -->

                <div>
                    <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4> <?php echo $Var; ?> </h4>
                            <div> <?php
                                    $CategoryList2 = IPS_GetChildrenIDs(33603);

                                    foreach($CategoryList2 as $Instance) { 
                                        $InstanceList = IPS_GetChildrenIDs($Instance);
                                        $InstanceName = IPS_GetName($InstanceList);
                                        echo $InstanceName; } 
                                ?> </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Schliessen</a>
                        </div>
                    </div>          
                </div>
                                    
 
 <!-- Monitor Inhalt vom Modal Output vom WebSocket -->

 <div>
                    <div id="modal2" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4> Monitoring </h4>
                            <p> <div id="output"></div> </p> <!-- Ist der Output vom Websocket -->
                        </div>
                    <!-- </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Schliessen</a>
                        </div>
                    </div>      -->    
</div>



<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
