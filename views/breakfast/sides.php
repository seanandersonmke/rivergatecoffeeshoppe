<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Side Items</h3>
      <img class="img-responsive center-block" alt="Horizontal rule" src="images/h2black.png"> 
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="sidesbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id='sidestable'>
<table class="table" ng-controller='BreakfastController'>
  <tr ng-repeat='sideorder in sideorders' class='opacback'>
  <td class="bold">{{sideorder.item}}</td><td class="italic">{{sideorder.desc}}</td><td><span class="badge">{{sideorder.price|currency}}</span></td>
  </tr>
</table>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="sidesbutclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var sidescontent = $('#sidestable');
    $(sidescontent).hide();
$( "#sidesbut" ).click(function() {
$( sidescontent).slideToggle( "slow", function() {
// Animation complete.
});
});

$( "#sidesbutclose" ).click(function() {
$( sidescontent).slideToggle( "slow", function() {
// Animation complete.
});
});
</script>