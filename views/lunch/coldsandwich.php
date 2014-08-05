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
<!--Cold Sandwich Table-->
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='coldsandwich in coldsandwiches'>
	<td class="bold">{{coldsandwich.item}}</td><td>{{coldsandwich.desc}}</td><td><span class="badge">{{coldsandwich.price|currency}}</span></td>
	</tr>
</table>