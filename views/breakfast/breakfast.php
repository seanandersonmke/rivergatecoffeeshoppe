<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/breakfast.jpg" alt="Breakfast Platter">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Breakfast Plates</h3>
      <img class="img-responsive center-block" alt="Horizontal rule" src="images/h2black.png"> 
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="brkmainbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id='brkmaintable'>
<table class="table" ng-controller='BreakfastController'>
  <tr ng-repeat='breakfasts in breakfast' class='opacback'>
  <td class="bold">{{breakfasts.item}}</td><td class="italic">{{breakfasts.desc}}</td><td><span class="badge">{{breakfasts.price|currency}}</span></td>
  </tr>
</table>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="brkmainbutclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var brkmaincontent = $('#brkmaintable');
    $(brkmaincontent).hide();
$( "#brkmainbut" ).click(function() {
$( brkmaincontent).slideToggle( "slow", function() {
// Animation complete.
});
});

$( "#brkmainbutclose" ).click(function() {
$( brkmaincontent).slideToggle( "slow", function() {
// Animation complete.
});
});
</script>