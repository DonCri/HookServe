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
   $('.sidenav').sidenav();
   $('.modal').modal();
   $('.tabs').tabs();
 });</script>

</head>

<body>

<?
    include('ws/websocket.html');
?>

<nav> <!-- navbar content here  --> </nav>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        











<!--

<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">My House</a></li>
        <li class="tab col s3"><a href="#test2">WebSocket</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Update</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12"> <div id="MyHouse"><? include('include/kategorie.php'); ?> </div> </div>
    <div id="test2" class="col s12"> <p id="output"> </p> </div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12"> <a href="module_update.php"> Module Updaten </a> </div>
  </div>

-->

<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
