<div class="well margtop opacback">
		  <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/thumbnails/clubsandwich.jpg" alt="Omelette Platter">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Club Sandwiches</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png">
      <h6><span class="glyphicon glyphicon-star"></span>Served with chips and a pickle - Cheese 50&#162; extra.</h6> 
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="clubsandbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="clubsandtable">
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='clubsandwich in clubsandwiches'>
	<td class="bold">{{clubsandwich.item}}</td><td class="italic">{{clubsandwich.desc}}</td><td><span class="badge">{{clubsandwich.price|currency}}</span></td>
	</tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="clubsandclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var clubsandcontent = $('#clubsandtable');
    clubsandcontent.hide();
  $( "#clubsandbut" ).click(function() {
  clubsandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#clubsandclose" ).click(function() {
clubsandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>