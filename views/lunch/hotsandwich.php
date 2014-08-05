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
<!--Hot Sandwich Table-->
<table class="table opacback" ng-controller='LunchController'>
	<tr ng-repeat='hotsandwich in hotsandwiches'>
	<td class="bold">{{hotsandwich.item}}</td><td><h5 class="italic">{{hotsandwich.desc}}</h5></td><td><span class="badge">{{hotsandwich.price|currency}}</span></td>
	</tr>
</table>