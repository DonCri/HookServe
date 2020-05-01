<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Test eigene Visualisierung</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.collapsible').collapsible();
    });
  </script>
</head>
<body>

<?php
    include('ws/w_socket.js');
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
        
            $CatName = IPS_GetName($Category);?>
            <a href="#dialog"><div id="content">
                <img src="img/Home.png">
            <span id="contentSPAN"><?php $Var = $CatName; 
            echo $Var; ?></span>
            </a></div>
    <?php } ?>
</div>

<div id="output">

</div>

</body>
</html>
