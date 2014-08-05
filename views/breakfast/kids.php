<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/mickey2.jpg" alt="Pancakes">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Kiddie's Corner</h3>
      <img class="img-responsive center-block" alt="Horizontal rule" src="images/h2black.png"> 
      <h6><span class="glyphicon glyphicon-star"></span>12 and Under/Dine-in only.</h6>
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="kidbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id='kidtable'>
<table class='table' ng-controller='BreakfastController'>
  <tr ng-repeat='kid in kids' class='opacback'>
  <td class="bold">{{kid.item}}</td><td class="italic">{{kid.desc}}</td><td><span class="badge">{{kid.price|currency}}</span></td>
  </tr>
</table>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="kidbutclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>
<script>
var kidcontent = $('#kidtable');
    $(kidcontent).hide();
$( "#kidbut" ).click(function() {
$( kidcontent).slideToggle( "slow", function() {
// Animation complete.
});
});

$( "#kidbutclose" ).click(function() {
$( kidcontent).slideToggle( "slow", function() {
// Animation complete.
});
});
</script>