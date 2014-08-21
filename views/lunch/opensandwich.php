<div class="well margtop opacback">
		  <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/thumbnails/opensand.jpg" alt="Open faced sandwich">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Open-faced Sandwiches</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png">
      <h6><span class="glyphicon glyphicon-star"></span>With mashed potatoes and gravy or fries</h6> 
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="opensandbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="opensandtable">
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='opensandwich in opensandwiches'>
	<td class="bold">{{opensandwich.item}}</td><td class="italic">{{opensandwich.desc}}</td><td><span class="badge">{{opensandwich.price|currency}}</span></td>
	</tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="opensandclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var opensandcontent = $('#opensandtable');
    opensandcontent.hide();
  $( "#opensandbut" ).click(function() {
  opensandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#opensandclose" ).click(function() {
opensandcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>