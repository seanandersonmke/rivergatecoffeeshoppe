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
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='clubsandwich in clubsandwiches'>
	<td class="bold">{{clubsandwich.item}}</td><td class="italic">{{clubsandwich.desc}}</td><td><span class="badge">{{clubsandwich.price|currency}}</span></td>
	</tr>
</table>