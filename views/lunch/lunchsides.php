<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Lunch Sides</h3>
      <center><img class="img-responsive" alt="Horizontal rule" src="images/h2black.png"></center>
    </div>
  </li>
</ul>
</div>
<table class="table opacback" ng-controller='LunchController'>
  <tr ng-repeat='lunchside in lunchsides'>
  <td class="bold">{{lunchside.item}}</td><td class="italic">{{lunchside.desc}}</td><td><span class="badge">{{lunchside.price|currency}}</span></td>
  </tr>
</table>