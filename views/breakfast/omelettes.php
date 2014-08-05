<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/omelettepicSM.jpg" alt="Omelette Platter">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>3 Egg Stuffed Omelettes</h3>
      <img class="img-responsive center-block" alt="Horizontal rule" src="images/h2black.png">
      <div>
      <h6>All Egg Breakfasts come with <b>Home Fries, Hashbrowns, or Grits, Toast, or Biscuit.</b>
      *Egg Beaters 50&#162 extra charge per egg
      |Cheese 50&#162 | English Muffin 60&#162 |
      Vegetables 75&#162 | Meat $1.25</h6>
    </div>
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="omelletebut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="omtable">
<table class='table' ng-controller='BreakfastController' id='omtable'>
  <tr ng-repeat='omelette in omelettes' class='opacback'>
  <td>{{omelette.item}} - {{omelette.desc}}<span class='badge pull-right'>{{omelette.price|currency}}</span></td>
  </tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="ombutclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var omcontent = $('#omtable');
    omcontent.hide();
$( "#omelletebut" ).click(function() {
    omcontent.slideToggle( "slow", function() {
});
});

$( "#ombutclose" ).click(function() {
omcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>