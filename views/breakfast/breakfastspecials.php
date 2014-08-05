<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/pancakesSM.jpg" alt="Pancakes">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Breakfast Specials</h3>
      <img class="img-responsive center-block" alt="Horizontal rule" src="images/h2black.png"> 
      <h6><span class="glyphicon glyphicon-star"></span>Blueberries or Chocolate Chips 70&#162; per pancake</h6>
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="brkbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="brktable">
<table class='table' ng-controller='BreakfastController'>
  <tr ng-repeat='breakfastspecial in breakfastspecials' class='opacback'>
  <td><b>{{breakfastspecial.item}}</b> - {{breakfastspecial.desc}}<span class="badge pull-right">{{breakfastspecial.price|currency}}</span></td>
  </tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="brkbutclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var brkcontent = $('#brktable');
    $(brkcontent).hide();
$( "#brkbut" ).click(function() {
$( brkcontent).slideToggle( "slow", function() {
// Animation complete.
});
});

$( "#brkbutclose" ).click(function() {
$( brkcontent).slideToggle( "slow", function() {
// Animation complete.
});
});
</script>