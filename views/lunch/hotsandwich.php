<div class="well margtop opacback">
		  <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/thumbnails/pattymelt.jpg" alt="Sandwich Picture">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Hot Sandwiches</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png">
      <h6><span class="glyphicon glyphicon-star"></span>Served with chips and a pickle - Cheese 50&#162; extra.</h6> 
    </div>
  </li>
</ul>
</div>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="hotsandbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>
<!--Hot Sandwich Table-->
<div id="hotsandtable">
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='hotsandwich in hotsandwiches'>
	<td class="bold">{{hotsandwich.item}}</td><td><h5 class="italic">{{hotsandwich.desc}}</h5></td><td><span class="badge">{{hotsandwich.price|currency}}</span></td>
	</tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="hotsandclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var hotsandcontent = $('#hotsandtable');
    hotsandcontent.hide();
  $( "#hotsandbut" ).click(function() {
  hotsandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#hotsandclose" ).click(function() {
hotsandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>