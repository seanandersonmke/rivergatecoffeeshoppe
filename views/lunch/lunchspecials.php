<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
      <img class="pull-left img-responsive margtop hidden-xs" src="images/countryfried.jpg" alt="Pancakes">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Specials (Everyday)</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png"> 
      <h6><span class="glyphicon glyphicon-star"></span>All Specials come with a choice of Potato, Vegetable and Grilled Texas Toast</h6>
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="lunchspecbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="lunchspectable">
<table class="table opacback" ng-controller='LunchController'>
  <tr ng-repeat='lunchspecial in lunchspecials'>
  <td class="bold">{{lunchspecial.item}}</td><td class="italic">{{lunchspecial.desc}}</td><td><span class="badge">{{lunchspecial.price|currency}}</span></td>
  </tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="lunchspecclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var lunchspeccontent = $('#lunchspectable');
    lunchspeccontent.hide();
  $( "#lunchspecbut" ).click(function() {
  lunchspeccontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#lunchspecclose" ).click(function() {
lunchspeccontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>