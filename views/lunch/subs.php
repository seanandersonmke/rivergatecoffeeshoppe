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
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="subbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="subtable">
<table class="table opacback" ng-controller='BreakfastController'>
  <tr ng-repeat='sub in subs'>
  <td class="bold">{{sub.item}}</td><td class="italic">{{sub.desc}}</td><td><span class="badge">{{sub.price|currency}}</span></td>
  </tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="subclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var subcontent = $('#subtable');
    subcontent.hide();
  $( "#subbut" ).click(function() {
  subcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#subclose" ).click(function() {
subcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>