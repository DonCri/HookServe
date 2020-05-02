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

</head>

<body>

<?php
        include('ws/websocket.html');
    ?>

<div id="titelbalken">
    <div id="titel">My House</div>
    <div id="titelUpdate"> <p><a href="module_update.php"><img id="ModuleUpdate" src="img/update_v2.png"></a></p> </div>
</div>

<div>
<div id="nav">
    <?php
        $CategoryList = IPS_GetChildrenIDs(33603);

        $Var = "";

        foreach($CategoryList as $Category) { 
        
            $CatName = IPS_GetName($Category);?>
            <a href="#dialog"><div id="content">
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                        <h4> <?php echo $CatName; ?> </h4>
                        <p>Hallo Welt</p>
                        </div>
                        <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Schliessen</a>
                        </div>
                    </div>
                    </div>
            <span id="contentSPAN"><?php $Var = $CatName; 
            echo $Var; ?></span>
            
            </a></div>
    <?php } ?>
       
    <!-- Modal Trigger -->
        <button id="modalStyle" data-target="modal1" class="btn modal-trigger">Modal</button>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>Hallo Welt</p>
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
