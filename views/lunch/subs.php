<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/sub.jpg" alt="Pancakes">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Subs</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png"> 
    </div>
  </li>
</ul>
</div>
<table class="table opacback" ng-controller='BreakfastController'>
  <tr ng-repeat='sub in subs'>
  <td class="bold">{{sub.item}}</td><td class="italic">{{sub.desc}}</td><td><span class="badge">{{sub.price|currency}}</span></td>
  </tr>
</table>