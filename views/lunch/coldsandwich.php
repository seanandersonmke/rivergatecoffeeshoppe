<div class="well margtop opacback">
		  <ul class="media-list">
  <li class="media">
      <img class="pull-left img-respsonsive margtop hidden-xs" src="images/thumbnails/tunasand.jpg" alt="Omelette Platter">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Cold Sandwiches</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png">
      <h6><span class="glyphicon glyphicon-star"></span>Your choice of lettuce, tomato, mayo, onion. Served with chips and a pickle.</h6> 
    </div>
  </li>
</ul>
</div>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="coldsandbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>
<!--Cold Sandwich Table-->
<div id="coldsandtable">
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='coldsandwich in coldsandwiches'>
	<td class="bold">{{coldsandwich.item}}</td><td>{{coldsandwich.desc}}</td><td><span class="badge">{{coldsandwich.price|currency}}</span></td>
	</tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="coldsandclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var coldsandcontent = $('#coldsandtable');
    coldsandcontent.hide();
  $( "#coldsandbut" ).click(function() {
  coldsandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#coldsandclose" ).click(function() {
coldsandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>