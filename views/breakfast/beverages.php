<div class="well margtop opacback">
		  <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/coffee.jpg" alt="Sandwich Picture">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Beverages</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png">
      <h6><span class="glyphicon glyphicon-star"></span>All refills in-house only</h6>
      <h6><span class="glyphicon glyphicon-star"></span>We grind our beans daily!</h6> 
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="bevbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<!--Hot Sandwich Table-->
<div id="bevtable">
<table class="table opacback" ng-controller='BreakfastController'>
	<tr ng-repeat='beverage in beverages'>
	<td class="bold">{{beverage.item}}</td><td><h5 class="italic"></h5></td><td><span class="badge">{{beverage.price|currency}}</span></td>
	</tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="bevbutclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var bevcontent = $('#bevtable');
    bevcontent.hide();
  $( "#bevbut" ).click(function() {
  bevcontent.slideToggle( "slow", function() {
// Animation complete.
});
});

$( "#bevbutclose" ).click(function() {
bevcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>