<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/salad.jpg" alt="Pancakes">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Salads</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png"> 
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="saladbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="saladtable">
<table class="table opacback" ng-controller='LunchController'>
  <tr ng-repeat='salad in salads'>
  <td class="bold">{{salad.item}}</td><td class="italic">{{salad.desc}}</td><td><span class="badge">{{salad.price|currency}}</span></td>
  </tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="saladclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var saladcontent = $('#saladtable');
    saladcontent.hide();
  $( "#saladbut" ).click(function() {
  saladcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#saladclose" ).click(function() {
saladcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>