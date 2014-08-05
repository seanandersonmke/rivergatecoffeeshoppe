<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Located in the sunny town of Ormond Beach, Florida, the Rivergate Coffee Shoppe serves American style breakfast with a southern flair.
Our friendly staff serves brewed coffee from fresh beans ground daily. Dine-in our call for delivery. With breakfast platters, sandwiches, salads and a kids menu, 
the Rivergate Coffee Shoppe has something for everyone!"/>
    <meta name="keywords" content="Rivergate Coffee Shoppe, Ormond Beach, breakfast, American breakfast, diner, coffee, lunch">
    <title>Rivergate Coffee Shoppe</title>
    <link rel="icon" href="images/friedeggSM.png" type="image/x-icon"/>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/angular-route.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="controllers/controller.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" media="screen" />
      <script>
$(document).ready(function(){
$("#carousel-example-generic").carousel();});</script>
  </head>
  <body>
      
  
    <div ng-view></div>



<?php include 'footer.php';?>