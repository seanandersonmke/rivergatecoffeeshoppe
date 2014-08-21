<div class="well margtop opacback">
      <ul class="media-list">
  <li class="media">
    <img class="pull-left img-responsive margtop hidden-xs" src="images/chili.jpg" alt="Pancakes">
    <div class="media-body margtop">
      <h3 class="cursive"><span class="glyphicon glyphicon-cutlery"></span>Soup of the Day</h3>
      <img class="img-responsive" alt="Horizontal rule" src="images/h2black.png">
    </div>
  </li>
</ul>
</div>

<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="soupbut"><span class="glyphicon glyphicon-arrow-down"></span></button>
  </div>
</div>

<div id="souptable">
<table class="table opacback">
  <tr>
    <td class="bold">Soup of the Day</td><td class="italic"></td><td>Bowl - <span class="badge">$3.00</span><td>Cup - <span class="badge">$2.50</span></td>
  </tr>
  <tr>
    <td class="bold">Homemade Chili</td><td class="italic"></td><td>Bowl - <span class="badge">$3.00</span><td>Cup - <span class="badge">$2.50</span></td>
  </tr>
</table>
<div class="btn-group btn-group-justified">
   <div class="btn-group">
<button class="btn btn-default opacback" id="soupclose"><span class="glyphicon glyphicon-arrow-up"></span></button>
  </div>
</div>
</div>

<script>
var soupcontent = $('#souptable');
    soupcontent.hide();
  $( "#soupbut" ).click(function() {
  soupcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
$( "#soupclose" ).click(function() {
soupcontent.slideToggle( "slow", function() {
// Animation complete.
});
});
</script>